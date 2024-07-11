@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="container-order">
            <form action="post">
                @csrf
                <div class="order-box">
                    <label for="name">Name</label><br>
                    <input type="text" name="name" id="fname" placeholder="Enter your name" required>
                </div>
                <div class="order-box">
                    <label for="phone">Phone</label><br>
                    <input type="text" name="phone" id="fname" placeholder="Enter your phone" required><br>
                </div>
                <div class="order-select">
                    <div class="num">
                        <select>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>More</option>
                        </select>
                    </div>
                    <div class="type">
                        <select>
                            <option>Burger One</option>
                            <option>Burger Two</option>
                            <option>Burger Three</option>
                            <option>Burger Four</option>
                            <option>Burger Five</option>
                        </select>
                    </div>
                </div>
                <div class="order-box">
                    <label for="address">Address</label><br>
                    <textarea name="address" id="address"></textarea><br>
                </div>
                <input type="submit" value="Comfirm">
            </form>
        </div>
    </div>
@endsection
