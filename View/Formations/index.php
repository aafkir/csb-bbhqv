<section class="py-0" id="header">
    <div class="bg-holder d-none d-md-block"
        style="background-image:url(<?=BU?>/public/images/hero-header.png);background-position:right top;background-size:contain;">
    </div>

    <div class="bg-holder d-md-none"
        style="background-image:url(<?=BU?>/public/images/hero-bg.png);background-position:right top;background-size:contain;">
    </div>

    <div class="container">
        <div class="row align-items-center min-vh-75 min-vh-lg-100">
            <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center"  style="z-index: 2;">
                <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6">Formations</h1>
                <p class="mb-4 fs-1">Mes formations servent à ...</p>
                <button type="button" class="btn btn-lg btn-success me-2 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter une
              formation</button>
            </div>
        </div>
    </div>
</section>
<section class="py-5" id="events">
    <div class="bg-holder d-none d-sm-block"
        style="background-image:url(<?=BU?>/public/images/bg.png);background-position:top left;background-size:225px 755px;margin-top:-17.5rem;">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto text-center mb-3">
                <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Formations</h5>
                <p class="mb-5">Liste des formations à venir.</p>
            </div>
        </div>
        <div class="row flex-center h-100">
            <div class="col-xl-9">
                <div class="row">
                    <?php foreach ($data->list as $k => $v):?>
                    <div class="col-md-4 mb-5" foreach="formations" style="cursor:pointer" >
                        <div class="card h-100 shadow px-4 px-md-2 px-lg-3 card-span pt-3">
                            <div class="col-12 col-md-3 col-lg-3 col-xl-3 mb-2" style="display: flex">

                                <a href="<?=Url::getUrl("Formations/delete/".$v->IdFormation)?>" type="button" class="btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Supprimer" onclick="deleteEvent(this, 'formation')">
                                <i class="far fa-trash-alt"></i>
                                <span foreach-value="id" class="edit-id" style="display: none"></span>
                                </a>
                            </div>
                            <div class="text-center text-md-start card-hover"><img class="ps-3 icons"
                                    src="<?=BU?>/public/images/formation.svg" height="60" alt="" />
                                <div class="card-body">
                                    <h6 class="fw-bold fs-1 heading-color" foreach-value="name"></h6>
                                    <p class="mt-3 mb-md-0 mb-lg-2"><?=$v->TitreF; ?> <span foreach-value="date"></span></p>
                                    <p class="mt-3 mb-md-0 mb-lg-2">Date: <?=$v->DateF; ?> <span foreach-value="date"></span></p>
                                    <p class="mt-3 mb-md-0 mb-lg-2">Places restantes: <?=($v->NbPersonneMax - $v->NbPersonneInscrit); ?> <span foreach-value="availablePlaces" class="available-places"></span></p>
                                    <a href="<?php Url::getUrl("Formations/details/".$v->IdFormation)?>" >En savoir plus ...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form role="form" method="POST" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nouvelle Formation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-9 col-md-12 col-xxl-9">
                            <div class="form-group mb-2">
                                <label for="TitreF" class="text-grey">Titre</label>
                                <input type="text" name="TitreF" id="name" placeholder="Titre" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="DateF" class="text-grey">Date</label>
                                <input type="date" name="DateF" id="date" placeholder="Date" class="form-control">
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                <label for="jours" class="text-grey">Durée</label>
                                <input type="number" name ="jours" id="jours" placeholder="Jours" class="form-control">
                                </div>
                                <div class="col">
                                <label for="heurs" class="text-white">. </label>
                                <input type="number" name="heurs" id="heurs" placeholder="Heurs" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label for="Prix" class="text-grey">Prix</label>
                                <input type="number" name="Prix" id="prix" placeholder="Prix" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="NbPersonneMax" class="text-grey">Places</label>
                                <input type="number" name="NbPersonneMax" id="Places" placeholder="Places" class="form-control">
                            </div>                            
                            <div class="form-group mb-2">
                                <label for="image" class="text-grey">Image</label>
                                <input type="text" name="image" id="Image" placeholder="Image" class="form-control">
                            </div>
                            <div class="form-group mb-2">
                                <label for="DescriptionF" class="text-grey">Description</label>
                                <textarea name="DescriptionF" id="NbPersonneMax" placeholder="Description" class="form-control mb-5"></textarea>
                            </div>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Save"/>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</section>

<script src="<?=BU?>/public/js/event/formations.js"></script>
