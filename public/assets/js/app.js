var val_range;
var sal_range;

$(document).ready(function() {
  injectSlider();
  var housingData = "https://data.sfgov.org/resource/9rdx-httc.json";
  $.getJSON( housingData, function(data){
    $.each( data, function( j, item ) {
      tr = $('<tr/>');
        gmapLink = '';
        if(item['location'] !== undefined && item['location']['coordinates'] !== undefined){
          // link to google map
          coords = item['location']['coordinates'];
          gmapLink = '<a href="https://www.google.com/maps?q=' + coords[1] + ',' + coords[0] + '" target=_blank>Take me there</a>';
        }
        tr.append("<td>" + item["project_name"] + "</td>");
        tr.append("<td>" + item["street_number"] + "</td>");
        tr.append("<td>" + item["street_name"] + "</td>");
        tr.append("<td>" + item["project_address"] + "</td>");
        tr.append("<td>" + item["total_units"] + "</td>");
        tr.append("<td>" + item["total_beds"] + "</td>");
        tr.append("<td>" + item["affordable_units"] + "</td>");
        tr.append("<td>" + item["affordable_beds"] + "</td>");
        tr.append("<td class='map-link'>" + gmapLink + "</td>");
        $('.data-grid').append(tr);
    });
    setupSlider();

  })
});

// Source: http://live.datatables.net/teredumi/4/
function injectSlider(){
  $.fn.dataTable.ext.search.push(
    //Slider 1
    function( settings, data, dataIndex ) {
      var min = parseFloat(val_range.slider( "values", 0 ));
      var max = parseFloat(val_range.slider( "values", 1 ));
      var col = parseFloat( data[4] ) || 0; // data[number] = column number
      if ( ( isNaN( min ) && isNaN( max ) ) ||
          ( isNaN( min ) && col <= max ) ||
          ( min <= col   && isNaN( max ) ) ||
          ( min <= col   && col <= max ) )
      {
        return true;
      }
      return false;
    },
    //Slider 2
    function( settings, data, dataIndex ) {
      var min = parseFloat(sal_range.slider( "values", 0 ));
      var max = parseFloat(sal_range.slider( "values", 1 ));
      var col = parseFloat( data[6] ) || 0; // data[number] = column number
      if ( ( isNaN( min ) && isNaN( max ) ) ||
          ( isNaN( min ) && col <= max ) ||
          ( min <= col   && isNaN( max ) ) ||
          ( min <= col   && col <= max ) )
      {
        return true;
      }
      return false;
    }
  );
}

function setupSlider(){
  sal_range = $( "#val_range_salary" );
  val_range = $( "#val_range" );
  var live_range_val = $( "#live_range_val" );
  var val_range_salary =$( "#live_range_val_salary" );
  val_range.slider({
    range: true,
    min: 0,
    max: 90,
    step: 1,
    values: [ 0, 90 ],
    slide: function( event, ui ) {
      live_range_val.val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
    },
    stop: function( event, ui ) {
      table.draw();
    }
  });
    sal_range.slider({
    range: true,
    min: 0,
    max: 100,
    step: 1,
    values: [ 0, 100 ],
    slide: function( event, ui ) {
      val_range_salary.val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
    },
    stop: function( event, ui ) {
      table.draw();
    }
  });
  live_range_val.val(val_range.slider( "values", 0 ) + " - " + val_range.slider( "values", 1 ) );
  val_range_salary.val(sal_range.slider( "values", 0 ) + " - " + sal_range.slider( "values", 1 ) );

  var table = $( "#sort_table" ).DataTable({
    "bPaginate": false,
    "bFilter": true,
  });
}