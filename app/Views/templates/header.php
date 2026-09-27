<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?> | Tasks for Today</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #243247;
        }

        nav {
            display: flex;
            align-items: center;
            gap: 22px;
            padding: 17px 8%;
            background: #1e3a5f;
        }

        nav .brand {
            margin-right: auto;
            color: #ffffff;
            font-size: 21px;
            font-weight: bold;
            text-decoration: none;
        }

        nav a {
            color: #e8eef5;
            text-decoration: none;
        }

        nav a:hover {
            color: #ffd166;
        }

        main {
            width: 86%;
            max-width: 1100px;
            min-height: 75vh;
            margin: 35px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(30, 58, 95, 0.1);
        }

        h1 {
            margin-top: 0;
            color: #1e3a5f;
        }

        .subtitle {
            margin-bottom: 25px;
            color: #68768a;
        }

        .summary {
            display: inline-block;
            margin-bottom: 20px;
            padding: 12px 18px;
            border-left: 5px solid #2d6a9f;
            background: #edf5fc;
            border-radius: 5px;
        }

        .table-container {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid #dfe5ec;
            text-align: left;
        }

        th {
            background: #1e3a5f;
            color: #ffffff;
        }

        tr:nth-child(even) {
            background: #f7f9fc;
        }

        tr:hover {
            background: #edf5fc;
        }

        .status {
            display: inline-block;
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: bold;
            text-transform: capitalize;
        }

        .status-pending {
            background: #fff1cc;
            color: #8a6100;
        }

        .status-completed {
            background: #d9f5e5;
            color: #176b3a;
        }

        .profile-card {
            max-width: 600px;
            padding: 25px;
            border-left: 6px solid #2d6a9f;
            background: #f7f9fc;
            border-radius: 8px;
        }

        .profile-card p {
            margin: 13px 0;
        }

        .empty-message {
            padding: 20px;
            background: #fff4e5;
            border-radius: 7px;
            color: #7a4b00;
        }

        footer {
            padding: 20px;
            background: #1e3a5f;
            color: #ffffff;
            text-align: center;
        }

        @media (max-width: 700px) {
            nav {
                align-items: flex-start;
                flex-direction: column;
            }

            nav .brand {
                margin-right: 0;
            }

            main {
                width: 94%;
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <nav>
        <a class="brand" href="<?= base_url('/') ?>">Tasks for Today</a>
        <a href="<?= base_url('/') ?>">Welcome</a>
        <a href="<?= base_url('tasks') ?>">Task List</a>
        <a href="<?= base_url('profile') ?>">Profile</a>
        <a href="<?= base_url('about') ?>">About</a>
    </nav>

    <main>