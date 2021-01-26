@extends('header')

@section('tags')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endsection

@section('content')
    <div class="profile-header">
        <h4>My Profile</h4>
    </div>
    <div class="inp-fields container">
        <div class="inp-item row">
            <div class="inp-header col-2">
                <label for="name">Name:</label>
            </div>
            <div class="col">
                <input type="text" id="name" name="name">
            </div>
        </div>
        <div class="inp-item row">
            <div class="inp-header col-2">
                <label for="email">Email:</label>
            </div>
            <div class="col">
                <input type="email" id="email" name="email">
            </div>
        </div>
        <div class="inp-item row">
            <div class="inp-header col-2">
                <label for="address">Address:</label>
            </div>
            <div class="col">
                <input type="text" id="address" name="address">
            </div>
        </div>
    </div>
    <div class="profile-buttons">
        <div class="row">
            <div class="change-password col-6">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#passwordModal">Change Password</button>
            </div>
            <div class="save-details col-6">
                <button type="button" class="btn btn-dark">Save Details</button>
            </div>
            <div class="shopping-cart col-6">
                <button type="button" class="btn btn-dark">Shopping Cart</button>
            </div>
            <div class="member-benefits col-6">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#nextVersion">Member Benefits</button>
            </div>
            <div class="payment-info col-6">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#nextVersion">Payment Information</button>
            </div>
        </div>
    </div>

{{--    Password Modal--}}
    <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" class="password-form">
                        <div class="old-passwort password-form-item">
                            <div class="col">
                                <label for="oldpasswort">Old Password:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="oldpass" id="oldpasswort">
                            </div>
                        </div>
                        <div class="new-password password-form-item">
                            <div class="col">
                                <label for="newpasswort">New Password:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="newpass" id="newpasswort">
                            </div>
                        </div>
                        <div class="repeat-password password-form-item">
                            <div class="col">
                                <label for="repeatpasswort">Repeat New Password:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="repeatpass" id="repeatpasswort">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-dark">Save changes</button>
                </div>
            </div>
        </div>
    </div>

{{--    Next Version Popup--}}
    <div class="modal fade" id="nextVersion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sorry, please come again later</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This will be implemented in the next version
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
