<!DOCTYPE html>
<html>

<head>
    <title>Laragon</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
:root {
    --main: #4cd984;
}
.timeline {
    position: relative;
}
.timeline::after {
    content:'';
    width: 5px;
    background: #585858;
    position: absolute;
    left: 0;
    right: 0;
    margin: auto;
    top:0;
    bottom: 0;
}
.timeline .row {
    position: relative;
}
.timeline .row::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: 0;
    left: 0;
    margin: auto;
    background-color: white;
    border: 4px solid var(--main);
    top: 50px;
    border-radius: 50%;
    z-index: 1;
}
.timeline .card-header{
    padding:0.5em;
    font-weight: bold;
    font-size: 20px;
    background: var(--main);
}
@media only screen and (max-width:960px){
    .timeline .row::after {
        left: 5px;
        right: auto;
    }
    .timeline::after {
        right: auto;
    }
    .timeline .pr-5, .timeline .pl-5 {
        padding: 0 !important;
        padding-left: 50px !important;
        padding-right: 30px !important;
    }
}

</style>
</head>


<body>
<section class="section">
        <div class="container">
                <h2>Timeline</h2>
            <div class="timeline">

                <?php
                $test = array(
                    1,2,3,4
                    );
                foreach ($test as $t) {
                ?>
                <div class="mt-3 row">
                    <div class="pr-5 col-lg-6">
                        <div class="shadow card">
                            <div class="text-right card-header">
                                2019
                            </div>
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                    </div>
                    <div class="pl-5 col-lg-6">
                    <div class="shadow card">
                            <div class="text-right card-header">
                                2019
                            </div>
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
                <?php
                }
                ?>

                <!-- <div class="mt-3 row">
                    <div class="pr-5 col-lg-6">
                    </div>
                    <div class="pl-5 col-lg-6">
                        <div class="shadow card">
                            <div class="text-right card-header">
                                Nov 2018
                            </div>
                            <div class="card-body">
                                This is some text within a card body.
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--end row-->



            </div>
            <!--end timeline-->
        </div>
        </div>

    </section>

</body>

</html>

