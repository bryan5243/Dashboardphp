<?php
include_once('./layout/plantilla.php');
include_once('menu.php');
?>

<main>
    <div class="date">
        <input type="date">
    </div>

    <div class="insights">
        <div class="sales">
            <span class="material-icons-sharp">analytics</span>
            <div class="middle">
                <div class="left">
                    <h3>pacientes</h3>
                    <h1>150</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx='38' cy='38' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>81%</p>
                    </div>
                </div>

            </div>
            <small class="text-muted">Ultimas 24 horas</small>
        </div>


        <!----------fin sales------>


        <div class="expenses">
            <span class="material-icons-sharp">bar_chart</span>
            <div class="middle">
                <div class="left">
                    <h3>pacientes</h3>
                    <h1>150</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx='38' cy='38' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>81%</p>
                    </div>
                </div>

            </div>
            <small class="text-muted">Ultimas 24 horas</small>
        </div>

        <div class="income">
            <span class="material-icons-sharp">stacked_line_chart</span>
            <div class="middle">
                <div class="left">
                    <h3>pacientes</h3>
                    <h1>150</h1>
                </div>
                <div class="progress">
                    <svg>
                        <circle cx='38' cy='38' r='36'></circle>
                    </svg>
                    <div class="number">
                        <p>81%</p>
                    </div>
                </div>

            </div>
            <small class="text-muted">Ultimas 24 horas</small>
        </div>
    </div>


    <!----------Final estadistica------>


    <div class="recent-order">
        <h2>Recent orders</h2>
        <table>
            <thead>
                <tr>

                    <th>Producy Name</th>
                    <th>Product Number</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Foldable mini drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>Foldable mini drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>Foldable mini drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>Foldable mini drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
                <tr>
                    <td>Foldable mini drone</td>
                    <td>85631</td>
                    <td>Due</td>
                    <td class="warning">Pending</td>
                    <td class="primary">Details</td>
                </tr>
            </tbody>
        </table>
        <a href="#">Show all</a>

    </div>

</main>

<?php
include("header.php");
?>
<script src="./js/menu.js"></script>
<script src="./js/tema.js"></script>

