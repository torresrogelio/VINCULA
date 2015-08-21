<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <style>
        body { margin:0; padding: 0; }

        header {
            background: #97494A;
            color: #fff;
            margin: 0;
            padding: 1em;
        }

        header h1 {
            margin: 0;
            padding: 0;
        }

        nav {
            background: #3A4B54;
            color: #fff;
            float: left;
            width: 150px;
            margin: 0 1em 0 0;
        }

        nav ul {
            margin: 0;
            padding: 0;
        }

        nav ul li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li a {
            color: #fff;
            padding: 0.5em;
            display: block;
            text-align: left;
            border-top: 1px solid #ccc;
        }

        nav ul li a:hover {
            background: #516873;
            color: #fff;
            text-decoration: none;
        }

        nav ul li a span {
            float: right;
        }

        .container {
            float: left;
        }
    </style>
</head>

<body>

<header>
    <h1>VINCULA</h1>
</header>


<nav>
    <ul>
        <li>
            <a href="{{ route('teachers.index') }}">
                Teachers
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('students.index') }}">
                Students
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('companies.index') }}">
                Companies
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('company_types.index') }}">
                Company types
                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('agreements.index') }}">
                Agreements
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('agreement_types.index') }}">
                Agreement types
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('exchanges.index') }}">
                Exchanges
                <span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('work_offers.index') }}">
                Work offers
                <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('current_graduate_student_jobs.index') }}">
                Current gradute student job
                <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
            </a>
        </li>
    </ul>
</nav>

<div class="container">

    <div class="row">

        <div class="col-md-12">

            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif

            @yield('main')

        </div>
    </div>
</div>

</body>
</html>