@extends('layouts.app')
@section('content')

<div class="dialog-off-canvas-main-canvas">
<div class=layout-container>
  <header role="banner">
    <div class="sfgov-nav-container">
      <div class="sfgov-logo__container">
        <a href="/" class="branding-link">
          <span class="sfgov-logo">
            <span class="sfgov-logo__image">
              <img class="sfgov-logo--seal" src="https://sf.gov/themes/custom/sfgovpl/logo.svg" alt="Home">
              <img class="sfgov-logo--lockup" src="https://sf.gov/themes/custom/sfgovpl/src/img/sfgov.svg" alt="Home">
          </span>
          </span>
        </a>
      </div>
      <div class="head-right--container">
        <span>Main Menu</span>
      </div>
    </div>
  </header>
<main role="main">
<div class="main-content-container">
  <div id="block-sfgovpl-content">
    <div class="views-element-container">
      <span class="hero-banner--border"><span class="hero-banner--border-contain"></span></span>
      <div class="hero-banner default">
          <div class="">
            <h3>Mayor's Office of Housing and Community Development Affordable Rental Portfolio</h3>
            <div class="transaction-card__body">
              Affordable rental housing developed in partnership with non-profit and private developers and financed by the Mayor’s Office of Housing and Community Development (MOHCD) and the Office of Community Investment and Infrastructure (OCII) through City Funding Agreements, Ground Leases, Disposition & Participation Agreements and Conduit Mortgage Revenue Bond Financing, as of December 31, 2018.
            </div>
          </div>
      </div>
    <div class="sfgov-departments">
        <div class="views-view-grid horizontal l-grid">
          <div class="l-grid__row l-grid--cols-2 clearfix row-1">
                  <div class="l-grid__column col-1">
                    <div class="transaction-card">
                      <div class="transaction-card-container">
                          <h4 class="transaction-card__title"> Total Units: </h4>
                          <div class="transaction-card__body"><input type="text" id="live_range_val" readonly style="border:0; color:#f6931f; font-weight:bold;">
                          <div id="val_range" style="width:200px"></div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="l-grid__column col-2">
                    <div class="transaction-card">
                      <div class="transaction-card-container">
                        <h4 class="transaction-card__title"> Affordable Units:</h4>
                        <div class="transaction-card__body"><input type="text" id="live_range_val_salary" readonly style="border:0; color:#f6931f; font-weight:bold;">
                            <div id="val_range_salary" style="width:200px"></div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
          </div>

          <table id="sort_table" class="display nowrap">
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
</main>
</div>
</div>


  </div>
</div>
@endsection