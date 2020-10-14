<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>URL shortener service</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600|Roboto:300,400" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            padding: 20px;
        }

        .content {
            max-width: 1200px;
            margin: auto;
        }

        .main-header {
            margin-top: 200px;
            padding: 20px 0px;
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            box-sizing: border-box;
        }

        .main-header__logo {
            font-size: 37px;
            font-family: Montserrat, sans-serif;
            font-weight: normal;
            position: relative;
            color: #eb4a42;
            box-sizing: border-box;
        }

        .main-header__logo::after {
            content: "";
            position: absolute;
            background: #eb4a42;
            display: block;
            top: calc(100% - 6px);
            width: 100%;
            height: 3.6px;
            border-radius: 3px;
        }

        .main-header__motto {
            font-family: Roboto, sans-serif;
            font-weight: 300;
            font-size: 16px;
            color: #ccc;
        }

        .shoort {
            display: flex;
            box-sizing: border-box;
            padding: 20px 0px;
        }

        .shoort__input {
            flex: 1;
            background: #eaeaea;
            margin-right: 20px;
            border: none;
            padding: 0px 15px;
            border-radius: 3px;
            font-family: Roboto, sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        .shoort__btn {
            cursor: pointer;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            font-family: Roboto, sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        .shoort__btn--disabled {
            background: #e0e0e0;
            color: #bfbfbf;
        }

        .history__header {
            display: flex;
            align-items: baseline;
            box-sizing: border-box;
            padding-top: 20px;
        }

        .history__title {
            font-family: Roboto, sans-serif;
            font-weight: 300;
            font-size: 22px;
        }

        .history__clear-btn {
            cursor: pointer;
            color: #eb4a42;
            background: transparent;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            font-family: Roboto, sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        .history__table {
            width: 100%;
            text-align: center;
            font-family: Roboto, sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        .history__table th {
            font-family: Roboto, sans-serif;
            font-weight: 400;
            font-size: 14px;
            font-variant-caps: all-small-caps;
            color: #aaa;
        }

        .history__link {
            text-align: left;
        }

        .history__visits {
            min-width: 100px;
        }

        .history__last-visited {
            min-width: 120px;
        }

        .history__row {
            height: 50px;
        }

        .link-info {
            position: relative;
            text-align: left;
            max-width: 400px;
            display: inline-block;
            cursor: pointer;
        }

        .link-info::before {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: -10px;
            display: block;
            width: 3.6px;
            border-radius: 3px;
            background: #eb4a42;
        }

        .link-info__shortened {
            font-family: Roboto, sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: #555;
            margin: 8px 0px;
        }

        .link-info__hint {
            visibility: hidden;
            margin-left: 30px;
            color: #eb4a42;
            font-family: Roboto, sans-serif;
            font-weight: 300;
            font-size: 16px;
        }

        .link-info:hover .link-info__hint {
            visibility: visible;
        }

        .link-info__original {
            font-family: Roboto, sans-serif;
            font-weight: 400;
            font-size: 16px;
            color: #ccc;
            margin: 8px 0px;
            white-space: nowrap;
            overflow-x: hidden;
            text-overflow: ellipsis;
        }

        .link-info__accent {
            color: #eb4a42;
        }

        .paginate {
            display: inline-flex;
            margin-left: 0;
        }

        nav ul {
            padding-left:0;
        }

        .paginate li {
            display: inline-block;
            padding: 5px;
            font-size: 15px;
        }

        .paginate li a {
            color: #eb4a42;
        }

    </style>
</head>
<body>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
