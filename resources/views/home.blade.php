@extends('layouts.app')
@section('content')

<div class="container">
      <p>
        <label>Total Units: </label><input type="text" id="live_range_val" readonly style="border:0; color:#f6931f; font-weight:bold;">
      </p>
      <div id="val_range" style="width:200px"></div>
      <p>
        <label>Affordable Units: </label><input type="text" id="live_range_val_salary" readonly style="border:0; color:#f6931f; font-weight:bold;">
      </p>
      <div id="val_range_salary" style="width:200px"></div>
      <table id="sort_table" class="display nowrap" width="100%">
        <thead>
          <tr>
            <th>Project Name</th>
            <th>Street_number</th>
            <th>Street_name</th>
            <th>Zipcode</th>
            <th>Total Units</th>
            <th>Total Beds</th>
            <th>Affordable Units</th>
            <th>Affordable Beds</th>
            <th>Location</th>
          </tr>
        </thead>
        <tbody class='data-grid'>

        </tbody>
      </table>
    </div>
@endsection