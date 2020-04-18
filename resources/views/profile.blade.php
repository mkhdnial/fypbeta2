@extends('layouts.main')
@section('content')

  <div class="col-xl-6 col-lg-12 mb-4" style = "padding: 50px 50px ;">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Rental List</h5>
                            <table class="data-table data-table-standard responsive nowrap"
                                data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Availability</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Canon 60D</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-check"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Electronics</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Side Table</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-close"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Home Appliances</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Asus A455L</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-close"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Electronics</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Training Kick & Punching Pad4</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-check"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Sports</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Samsung s8</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-close"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Electronics</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Mini Bar</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-check"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Electronics</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Logitech Speaker</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-close"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Electronics</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Kawasaki Z250 ABS</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-check"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Motors</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Yamaha 135LC</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-close"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Motors</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">UV + Ionizer sy913</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-close"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Appliances</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cabinet TV</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-check"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Appliances</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Drill Bosch Hammer GBH2-26DRE</p>
                                        </td>
                                        <td>
                                            <p class="fa fa-close"></p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Appliances</p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table> 
                            @guest
                           <a href="/login"><button class="add-to-cart-btn"><i class="fa fa-plus"></i> Add Item</button></a>
                           @endguest
                           @auth
                           <a href="/dahlogin , go to add item page"><button class="add-to-cart-btn"><i class="fa fa-plus"></i> Add Item</button></a>
                           @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection