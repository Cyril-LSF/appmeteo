<div class="container-fluid bg-blue">
        <div class="row">
            <div class="col height d-flex flex-column justify-content-center align-items-center text-center">
                <h1 class="title mb-5">Super Weather</h1>
                <div class="card p-lg-5 p-md-5 p-2 bg-dark-blue radius card-border">
                    <div class="row">
                        <div class="col text-white">
                            <h2><?= $weather['location']['name'] ?>, <?= $weather['location']['region'] ?>, <?= $weather['location']['country'] ?></h2>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col d-flex flex-column justify-content-center align-items-center text-white">
                            <img src="<?= $weather['current']['weather_icons']['0'] ?>" alt="Illustration of <?= $weather['request']['query'] ?> weather" class="radius">
                            <p><?= $weather['current']['weather_descriptions']['0'] ?></p>
                        </div>
                        <div class="col d-flex justify-content-center align-items-center text-white fs-1">
                            <b><?= $weather['current']['temperature'] ?> °C</b>
                        </div>
                        <div class="col d-flex flex-column justify-content-center align-items-center text-white l-height">
                            <p>Wind: <?= $weather['current']['wind_speed'] ?> Kmph</p>
                            <p>Precip: <?= $weather['current']['precip'] ?> mm</p>
                            <p>Pressure: <?= $weather['current']['pressure'] ?> mb</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>