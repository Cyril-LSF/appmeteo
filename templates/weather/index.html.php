<div class="container-fluid w-100 h-100 bg-blue">
    <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center height">
            <h1 class="margin-title title text-center">Super Weather</h1>
            <h5 class="text-white">Saisissez le nom d'une ville</h5>
            <form action="index.php?controller=weather&task=show" method="post" class="w-100 d-flex justify-content-center">
                <input type="text" name="location" class="radius border-none me-2">
                <button type="submit" class="radius border-none bg-light button">Valider</button>
            </form>
        </div>
    </div>
</div>

