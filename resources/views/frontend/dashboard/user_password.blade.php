@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    User Password
@endsection

<!-- profile area start -->
<section class="profile__area pt-120 pb-120">
    <div class="container">
        <div class="profile__inner p-relative">
            <div class="profile__shape">
                <img class="profile__shape-1" src="{{ asset('frontend/assets/img/login/laptop.png') }}" alt="">
                <img class="profile__shape-2" src="{{ asset('frontend/assets/img/login/man.png') }}" alt="">
                <img class="profile__shape-3" src="{{ asset('frontend/assets/img/login/shape-1.png') }}" alt="">
                <img class="profile__shape-4" src="{{ asset('frontend/assets/img/login/shape-2.png') }}" alt="">
                <img class="profile__shape-5" src="{{ asset('frontend/assets/img/login/shape-3.png') }}" alt="">
                <img class="profile__shape-6" src="{{ asset('frontend/assets/img/login/shape-4.png') }}" alt="">
            </div>

            <div class="row">

                {{-- DashBoard SideBar --}}
                @include('frontend.body.dashboard_side')
                {{-- DashBoard SideBar --}}

                {{-- Main Body --}}
                <div class="col-xxl-8 col-lg-8">
                    <div class="profile__tab-content">
                        <div class="tab-content" id="profile-tabContent">



                            <div id="nav-password">
                                <div class="profile__password">

                                    <form action="{{ route('user.password.update') }}" method="POST">
                                        @csrf
                                        <div class="row">

                                            {{-- <div class="col-xxl-12">
                                                <div class="tp-profile-input-box">

                                                    <div class="tp-contact-input">
                                                        <input name="old_password"
                                                            class="@error('old_password') is-invalid @enderror"
                                                            id="old_password" type="password" autocomplete="off">
                                                        @error('old_password')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="tp-profile-input-title">
                                                        <label for="old_password">Old Password</label>
                                                    </div>

                                                </div>
                                            </div> --}}

                                            <div class="col-xxl-6 col-md-6">
                                                <div class="tp-profile-input-box">

                                                    <div class="tp-profile-input">
                                                        <input class="@error('new_password') is-invalid @enderror"
                                                            name="new_password" id="new_password" type="password"
                                                            autocomplete="off">

                                                        @error('new_password')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="tp-profile-input-title">
                                                        <label for="new_password">New Password</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-6 col-md-6">
                                                <div class="tp-profile-input-box">
                                                    <div class="tp-profile-input">
                                                        <input name="new_password_confirmation"
                                                            id="new_password_confirmation" type="password"
                                                            autocomplete="off">
                                                    </div>
                                                    <div class="tp-profile-input-title">
                                                        <label for="new_password_confirmation">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div class="profile__btn">
                                                    <button type="submit" class="tp-btn">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            {{-- <div class="tab-pane fade" id="nav-address" role="tabpanel"
                                aria-labelledby="nav-address-tab">
                                <div class="profile__address">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="profile__address-item d-sm-flex align-items-start">
                                                <div class="profile__address-icon">
                                                    <span>
                                                        <svg enable-background="new 0 0 32 32" viewBox="0 0 32 32">
                                                            <g>
                                                                <path
                                                                    d="m31.494 23.128-.959-.844v-3.708c0-1.315-1.067-2.382-2.382-2.382-1.144 0-2.126.813-2.34 1.937l-.821-.721c-.954-.835-2.378-.835-3.332 0l-6.5 5.717c-.307.276-.332.748-.057 1.055.262.292.704.331 1.014.091v5.326c.001 1.187.963 2.149 2.15 2.15h10.119c1.187-.001 2.148-.963 2.149-2.15v-5.326c.323.257.793.204 1.05-.119.248-.311.208-.763-.091-1.026zm-4.227-4.552c-.016-.488.366-.897.854-.913s.897.366.913.854c.001.02.001.04 0 .059v2.389l-1.767-1.554zm-2.625 11.671h-2.5v-1.748c.001-.613.497-1.109 1.11-1.11h.285c.613.001 1.109.497 1.11 1.11zm4.393-.648c0 .171-.068.336-.189.457h-.004c-.122.123-.287.191-.46.191h-2.24v-1.748c-.002-1.441-1.169-2.608-2.61-2.61h-.285c-1.441.002-2.608 1.169-2.61 2.61v1.746h-2.373c-.359-.001-.649-.291-.65-.65v-6.63l5.035-4.428c.387-.339.965-.339 1.352 0l5.034 4.426z" />
                                                                <path
                                                                    d="m21.106 22.318c0 1.226.993 2.219 2.219 2.219s2.219-.994 2.219-2.219v-.001c-.002-1.225-.994-2.217-2.219-2.218-1.226 0-2.219.993-2.219 2.219zm2.938-.001c-.002.396-.323.716-.719.717v.002c-.397 0-.719-.322-.719-.719s.322-.719.719-.719.719.322.719.719z" />
                                                                <path
                                                                    d="m23.001 10.145c0-.414-.336-.75-.75-.75h-15.462c-.414 0-.75.336-.75.75s.336.75.75.75h15.463c.414-.001.749-.336.749-.75z" />
                                                                <path
                                                                    d="m6.789 14.216c-.414 0-.75.336-.75.75s.336.75.75.75h10.572c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z" />
                                                                <path
                                                                    d="m12.075 19.039h-5.286c-.414 0-.75.336-.75.75s.336.75.75.75h5.286c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z" />
                                                                <path
                                                                    d="m11.556 30.247h-9.03c-.427-.001-.772-.346-.773-.773v-25.653c.001-.27.142-.52.372-.661l2.11-1.283c.268-.164.609-.148.862.039l1.404 1.037c.749.558 1.764.598 2.554.1l1.9-1.183c.26-.163.593-.156.846.018l1.629 1.111c.766.527 1.776.532 2.547.013l1.692-1.133c.255-.171.587-.175.846-.009l1.836 1.171c.783.504 1.796.476 2.55-.072l1.425-1.027c.265-.191.622-.195.891-.01l1.736 1.2c.21.144.335.382.335.637v8.089c0 .414.336.75.75.75s.75-.336.75-.75v-8.093c-.001-.748-.37-1.449-.987-1.872l-1.733-1.194c-.792-.544-1.839-.532-2.619.028l-1.425 1.025c-.256.186-.6.196-.867.025l-1.836-1.17c-.761-.485-1.736-.474-2.486.028l-1.692 1.133c-.262.177-.606.177-.868 0l-1.63-1.119c-.746-.509-1.722-.529-2.488-.05l-1.896 1.181c-.269.169-.614.155-.868-.034l-1.406-1.037c-.742-.55-1.744-.593-2.531-.11l-2.11 1.279c-.677.414-1.09 1.15-1.093 1.943v25.653c.001 1.255 1.018 2.272 2.273 2.273h9.03c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="profile__address-content">
                                                    <h3 class="profile__address-title">Billing Address</h3>
                                                    <p><span>Street:</span>3576 Glen Street</p>
                                                    <p><span>City:</span>Summer Shade</p>
                                                    <p><span>State/province/area:</span>Kentucky</p>
                                                    <p><span>Phone number:</span>270-428-8378</p>
                                                    <p><span>Zip code:</span>42166</p>
                                                    <p><span>Country calling code:</span> +1</p>
                                                    <p><span>Country:</span>United States</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="profile__address-item d-sm-flex align-items-start">
                                                <div class="profile__address-icon">
                                                    <span>
                                                        <svg viewBox="0 0 64 64">
                                                            <g id="ad">
                                                                <g>
                                                                    <path
                                                                        d="m50 49c-1.654 0-3 1.346-3 3s1.346 3 3 3 3-1.346 3-3-1.346-3-3-3zm0 4c-.551 0-1-.448-1-1s.449-1 1-1 1 .448 1 1-.449 1-1 1z" />
                                                                    <path
                                                                        d="m13 55c1.654 0 3-1.346 3-3s-1.346-3-3-3-3 1.346-3 3 1.346 3 3 3zm0-4c.551 0 1 .448 1 1s-.449 1-1 1-1-.448-1-1 .449-1 1-1z" />
                                                                    <path
                                                                        d="m62 47.278v-8.653c0-.612-.184-1.203-.533-1.708l-7.452-10.763c-.933-1.349-2.47-2.154-4.111-2.154h-7.61l1.742-3.049c1.285-1.731 1.963-3.788 1.963-5.951 0-5.514-4.486-10-10-10-1.791 0-3.547.479-5.081 1.385-.476.281-.633.895-.352 1.37s.893.632 1.37.353c1.225-.725 2.63-1.107 4.063-1.107 4.411 0 8 3.589 8 8 0 1.748-.554 3.408-1.601 4.802-.025.033-.048.068-.069.104l-6.331 11.078-6.33-11.077c-.021-.036-.044-.071-.069-.104-1.047-1.394-1.601-3.055-1.601-4.803 0-1.897.676-3.736 1.902-5.179.358-.42.307-1.052-.114-1.409-.421-.358-1.052-.308-1.41.114-1.534 1.803-2.379 4.103-2.379 6.474 0 1.781.467 3.486 1.346 5h-23.343c-1.654 0-3 1.346-3 3v27c0 1.654 1.346 3 3 3h2.08c.488 3.386 3.401 6 6.92 6s6.432-2.614 6.92-6h9.223c.552 0 1-.447 1-1s-.448-1-1-1h-9.223c-.488-3.386-3.401-6-6.92-6s-6.432 2.614-6.92 6h-2.08c-.551 0-1-.448-1-1v-9h26c.552 0 1-.447 1-1s-.448-1-1-1h-26v-16.001c0-.552.449-1 1-1h24.563l6.569 11.496c.178.312.509.504.868.504s.69-.192.868-.504l1.132-1.981v7.485h-5c-.552 0-1 .447-1 1s.448 1 1 1h5v10h-5.5c-.552 0-1 .447-1 1s.448 1 1 1h10.58c.488 3.386 3.401 6 6.92 6s6.432-2.614 6.92-6h4.08c1.103 0 2-.897 2-2v-2c0-.737-.405-1.375-1-1.722zm-49-.278c2.757 0 5 2.243 5 5s-2.243 5-5 5-5-2.243-5-5 2.243-5 5-5zm46.784-9h-15.784v-8h10.245zm-18.632-12h8.753c.984 0 1.906.483 2.466 1.293l.49.707h-8.86c-1.103 0-2 .897-2 2v8c0 1.103.897 2 2 2h16v7h-5.111c-1.263-1.235-2.988-2-4.889-2s-3.627.765-4.889 2h-5.111v-18.985l1.152-2.015zm-1.152 23h3.685c-.297.622-.503 1.294-.605 2h-3.08zm10 8c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5zm11-6h-4.08c-.102-.706-.308-1.378-.605-2h4.685z" />
                                                                    <path
                                                                        d="m36 21c3.309 0 6-2.691 6-6s-2.691-6-6-6-6 2.691-6 6 2.691 6 6 6zm0-10c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z" />
                                                                    <path
                                                                        d="m43 43h4c.552 0 1-.447 1-1s-.448-1-1-1h-4c-.552 0-1 .447-1 1s.448 1 1 1z" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="profile__address-content">
                                                    <h3 class="profile__address-title">Shipping Address</h3>
                                                    <p><span>Street:</span>3133 Lewis Street</p>
                                                    <p><span>City:</span>Naperville</p>
                                                    <p><span>State/province/area:</span>Illinois</p>
                                                    <p><span>Phone number:</span>630-857-9127</p>
                                                    <p><span>Zip code:</span> 60563</p>
                                                    <p><span>Country calling code:</span>+1</p>
                                                    <p><span>Country:</span>United States</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-order" role="tabpanel"
                                aria-labelledby="nav-order-tab">
                                <div class="profile__ticket table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Product Title</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"> #2245</th>
                                                <td data-info="title">How can i share ?</td>
                                                <td data-info="status pending">Pending </td>
                                                <td><a href="#" class="tp-logout-btn">Invoice</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #2220</th>
                                                <td data-info="title">Send money, but not working</td>
                                                <td data-info="status reply">Need your replay</td>
                                                <td><a href="#" class="tp-logout-btn">Reply</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #2125</th>
                                                <td data-info="title">Balance error</td>
                                                <td data-info="status done">Resolved</td>
                                                <td><a href="#" class="tp-logout-btn">Invoice</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #2124</th>
                                                <td data-info="title">How to decline bid</td>
                                                <td data-info="status hold">On Hold</td>
                                                <td><a href="#" class="tp-logout-btn">Status</a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"> #2121</th>
                                                <td data-info="title">How to contact</td>
                                                <td data-info="status done">Resolved</td>
                                                <td><a href="#" class="tp-logout-btn">Invoice</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> --}}

                            {{-- <div class="tab-pane fade" id="nav-notification" role="tabpanel"
                                aria-labelledby="nav-notification-tab">
                                <div class="profile__notification">
                                    <div class="profile__notification-top mb-30">
                                        <h3 class="profile__notification-title">My activity settings</h3>
                                        <p>Stay up to date with notification on activity that involves you including
                                            mentions, messages, replies to your bids, new items, sale and administrative
                                            updates </p>
                                    </div>
                                    <div class="profile__notification-wrapper">
                                        <div class="profile__notification-item mb-20">
                                            <div class="form-check form-switch d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="like" checked>
                                                <label class="form-check-label" for="like">Like & Follows
                                                    Notifications</label>
                                            </div>
                                        </div>
                                        <div class="profile__notification-item mb-20">
                                            <div class="form-check form-switch d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="post" checked>
                                                <label class="form-check-label" for="post">Post, Comments &
                                                    Replies
                                                    Notifications</label>
                                            </div>
                                        </div>
                                        <div class="profile__notification-item mb-20">
                                            <div class="form-check form-switch d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="new" checked>
                                                <label class="form-check-label" for="new">New Product
                                                    Notifications</label>
                                            </div>
                                        </div>
                                        <div class="profile__notification-item mb-20">
                                            <div class="form-check form-switch d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="sale" checked>
                                                <label class="form-check-label" for="sale">Product on sale
                                                    Notifications</label>
                                            </div>
                                        </div>
                                        <div class="profile__notification-item mb-20">
                                            <div class="form-check form-switch d-flex align-items-center">
                                                <input class="form-check-input" type="checkbox" role="switch"
                                                    id="payment" checked>
                                                <label class="form-check-label" for="payment">Payment
                                                    Notifications</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   --}}

                        </div>
                    </div>
                </div>
                {{-- Main Body --}}

            </div>
        </div>
    </div>
</section>
<!-- profile area end -->
@endsection
