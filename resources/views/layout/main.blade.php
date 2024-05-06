<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Expense Tracker</title>
    @include('includes.style')
</head>

<body class="dashboard">
<div id="preloader" class="preloader-wrapper">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div id="main-wrapper">
    @include('includes.header')
    @include('includes.sidebar')
    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-4">
                                <div class="page-title-content">
                                    <h3>Dashboard</h3>
                                    <p class="mb-2">Welcome Ekash Finance Management</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="breadcrumbs"><a href="#">Home </a>
                                    <span><i class="fi fi-rr-angle-small-right"></i></span>
                                    <a href="#">Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="stat-widget-1">
                        <h6>Total Balance</h6>
                        <h3>$ 432568</h3>
                        <p>
                            <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                            Last month <strong>$24,478</strong>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="stat-widget-1">
                        <h6>Total Period Change</h6>
                        <h3>$ 245860</h3>
                        <p>
                            <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                            Last month <strong>$24,478</strong>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="stat-widget-1">
                        <h6>Total Period Expenses</h6>
                        <h3>$ 25.35</h3>
                        <p>
                            <span class="text-danger"><i class="fi fi-rr-arrow-trend-down"></i>2.47%</span>
                            Last month <strong>$24,478</strong>
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="stat-widget-1">
                        <h6>Total Period Income</h6>
                        <h3>$ 22.56</h3>
                        <p>
                            <span class="text-success"><i class="fi fi-rr-arrow-trend-up"></i>2.47%</span>
                            Last month <strong>$24,478</strong>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-8 col-xl-8 col-lg-6">
                    <div class="card">
                        <div class="card-header balance-trend">
                            <h4 class="card-title">Balace Trends <br> <span>$221,478</span></h4>
                            <div class="trend-stats">
                                <p class="mb-0">Last Month</p>
                                <span class="text-success">
                                        <i class="fi fi-rr-arrow-trend-up"></i>
                                        12.25%
                                    </span>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="profileWallet"></canvas>
                        </div>
                    </div>
                </div>
                <div class=" col-xxl-4 col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Monthly Expenses Breakdown</h4>
                        </div>
                        <div class="card-body">
                            <div class="progress-stacked">
                                <div class="progress" style="width: 38%">
                                    <div class="progress-bar bg-orange-500"></div>
                                </div>
                                <div class="progress" style="width: 22%">
                                    <div class="progress-bar bg-amber-500"></div>
                                </div>
                                <div class="progress" style="width: 12%">
                                    <div class="progress-bar bg-yellow-500"></div>
                                </div>
                                <div class="progress" style="width: 9%">
                                    <div class="progress-bar bg-lime-500"></div>
                                </div>
                                <div class="progress" style="width: 8%">
                                    <div class="progress-bar bg-green-500"></div>
                                </div>
                                <div class="progress" style="width: 6%">
                                    <div class="progress-bar bg-cyan-500"></div>
                                </div>
                                <div class="progress" style="width: 5%">
                                    <div class="progress-bar bg-stone-500"></div>
                                </div>
                            </div>
                            <div class="list-1 mt-3">
                                <ul>
                                    <li>
                                        <p class="mb-0"><i class="fi fi-ss-circle text-orange-500"></i>Food</p>
                                        <h5 class="mb-0"><span>$1200</span>38%</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fi fi-ss-circle text-amber-500"></i>Transport</p>
                                        <h5 class="mb-0"><span>$1200</span>38%</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fi fi-ss-circle text-yellow-500"></i>Healthcare</p>
                                        <h5 class="mb-0"><span>$1200</span>38%</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fi fi-ss-circle text-lime-500"></i>Education</p>
                                        <h5 class="mb-0"><span>$1200</span>38%</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fi fi-ss-circle text-green-500"></i>Clothes</p>
                                        <h5 class="mb-0"><span>$1200</span>38%</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fi fi-ss-circle text-cyan-500"></i>Pets</p>
                                        <h5 class="mb-0"><span>$1200</span>38%</h5>
                                    </li>
                                    <li>
                                        <p class="mb-0"><i class="fi fi-ss-circle text-stone-500"></i>Entertainment</p>
                                        <h5 class="mb-0"><span>$1200</span>38%</h5>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Monthly Budgets</h4>
                        </div>
                        <div class="card-body">
                            <div class="budget-content">
                                <ul>
                                    <li>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-1"><i class="bg-green-500 fi fi-rr-carrot"></i>Grocery
                                                    Stores</h5>
                                                <p class="mb-0"><strong>75 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-green-500" role="progressbar"
                                                     style="width: 75%;">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-1"><i class="bg-cyan-500 fi fi-rr-bus"></i>Transportation
                                                </h5>
                                                <p class="mb-0"><strong>25 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan-500" role="progressbar"
                                                     style="width: 25%;"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-1"><i class="bg-sky-500 fi fi-sr-cat"></i>Pets</h5>
                                                <p class="mb-0"><strong>50 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-sky-500" role="progressbar"
                                                     style="width: 50%;"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-1"><i class="bg-indigo-500 fi fi-rr-graduation-cap"></i>Education
                                                </h5>
                                                <p class="mb-0"><strong>45 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-indigo-500" role="progressbar"
                                                     style="width: 45%;"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="budget-info flex-grow-2 me-3">
                                            <div class="d-flex justify-content-between align-items-center mb-1">
                                                <h5 class="mb-1"><i
                                                            class="bg-violet-500 fi fi-rr-shirt-long-sleeve"></i>Clothes
                                                </h5>
                                                <p class="mb-0"><strong>35 </strong>/ 100</p>
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-violet-500" role="progressbar"
                                                     style="width: 35%;"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-xxl-8 col-xl-8 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Monthly Income vs Expenses</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="chartjsIncomeVsExpense"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Weekly Expenses</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="chartjsWeeklyExpenses"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Payments History</h4>
                            <a href="#">See more</a>
                        </div>
                        <div class="card-body">
                            <div class="invoice-content">
                                <ul>
                                    <li class="d-flex justify-content-between active">
                                        <div class="d-flex align-items-center">
                                            <div class="invoice-info">
                                                <h5 class="mb-0">Electricity</h5>
                                                <p>5 january 2024</p>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="mb-2">+450.00</h5>
                                            <span class=" text-white bg-success">Paid</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="invoice-info">
                                                <h5 class="mb-0">Internet</h5>
                                                <p>5 january 2024</p>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="mb-2">+450.00</h5>
                                            <span class=" text-white bg-warning">Due</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="invoice-info">
                                                <h5 class="mb-0">Apple Music</h5>
                                                <p>5 january 2024</p>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="mb-2">+450.00</h5>
                                            <span class=" text-white bg-danger">Cancel</span>
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="invoice-info">
                                                <h5 class="mb-0">Groceries</h5>
                                                <p>5 january 2024</p>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <h5 class="mb-2">+450.00</h5>
                                            <span class=" text-white bg-success">Paid</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Saving Goals </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-md-3 col-sm-6">
                                    <div class="circle-progress-content">
                                        <div id="circle1"><span>80%</span></div>
                                        <h6>Vacation</h6>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-3 col-sm-6">
                                    <div class="circle-progress-content">
                                        <div id="circle2"><span>80%</span></div>
                                        <h6>Gift</h6>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-3 col-sm-6">
                                    <div class="circle-progress-content">
                                        <div id="circle3"><span>80%</span></div>
                                        <h6>New Car</h6>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-3 col-sm-6">
                                    <div class="circle-progress-content">
                                        <div id="circle4"><span>80%</span></div>
                                        <h6>Laptop</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transaction History</h4>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-responsive-sm">
                                        <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                        <span class="table-category-icon"><i
                                                                    class="bg-emerald-500 fi fi-rr-barber-shop"></i>
                                                            Beauty</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                        <span class="table-category-icon"><i
                                                                    class="bg-teal-500 fi fi-rr-receipt"></i> Bills &
                                                            Fees</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="table-category-icon"><i
                                                            class="bg-cyan-500 fi fi-rr-car-side"></i> Car</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                        <span class="table-category-icon"><i
                                                                    class="bg-sky-500 fi fi-rr-graduation-cap"></i>
                                                            Education</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                        <span class="table-category-icon"><i
                                                                    class="bg-blue-500 fi fi-rr-clapperboard-play"></i>
                                                            Entertainment</span>
                                            </td>
                                            <td>
                                                12.12.2023
                                            </td>
                                            <td>
                                                Grocery Items and Beverage soft drinks
                                            </td>
                                            <td>
                                                -32.20
                                            </td>
                                            <td>USD</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</div>
@include('includes.script')
</body>
</html>
