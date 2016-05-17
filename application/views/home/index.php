<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <style type="text/css">

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }
    body {
        background-color: #fff;
        margin: 40px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    a {
        color: #003399;
        background-color: transparent;
        font-weight: normal;
    }

    h1 {
        color: #444;
        background-color: transparent;
        border-bottom: 1px solid #D0D0D0;
        font-size: 19px;
        font-weight: normal;
        margin: 0 0 14px 0;
        padding: 14px 15px 10px 15px;
    }

    code {
        font-family: Consolas, Monaco, Courier New, Courier, monospace;
        font-size: 12px;
        background-color: #f9f9f9;
        border: 1px solid #D0D0D0;
        color: #002166;
        display: block;
        margin: 14px 0 14px 0;
        padding: 12px 10px 12px 10px;
    }

    #body {
        margin: 0 15px 0 15px;
    }

    p.footer {
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
    }

    #container {
        margin: 10px;
        border: 1px solid #D0D0D0;
        box-shadow: 0 0 8px #D0D0D0;
    }
    </style>
</head>
<body>

<div id="container">
    <h1>This is homepage of Github Page Test</h1>
    <div id="body">
        <p>Go to these link for more informations</p>
        <ul>
            <li><a href="<?= base_url().'contract/'?>">Contract</a></li>
            <li><a href="<?= base_url().'information/'?>">Information</a></li>
            <li><a href="<?= base_url().'product/'?>">Product</a></li>
            <li><a href="<?= base_url().'user/'?>">User</a></li>
            <li><a href="<?= base_url().'admin/'?>">Admin</a></li>
            <li><a href="<?= base_url().'payment/'?>">Payment</a></li>
            <li><a href="<?= base_url().'delivery/'?>">Delivery</a></li>
            <li><a href="<?= base_url().'address/'?>">Address</a></li>
            <li><a href="<?= base_url().'holiday/'?>">Holiday</a></li>
        </ul>
        <p>A product needs to be relevant: the users must have an immediate use for it. A product needs to be functionally able to do what it is supposed to, and do it with a good quality.
A product needs to be communicated: Users and potential users must know why they need to use it, what benefits they can derive from it, and what it does difference it does to their lives. Advertising and 'brand building' best do this.</p>
    </div>
</div>

</body>
</html>