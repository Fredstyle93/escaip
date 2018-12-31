@extends('layouts.app')

@section('main')

<div class="post-feed content-container">
    <div class="post-feed-header">
        <div class="post-user">
            <img src="img/users/user02.jpg" alt="" class="profil-img">
            <p class="post-information-name">Mathieu S.</p>
        </div>
        <div class="post-date">
            <p>Il y a 2j</p>
        </div>
    </div>
    <div class="post-feed-content project">
        <div class="row project-header">
            <div class="project-image-container col-12  col-md-4">    
                <img src="img/videogames.jpg" class="project-image" alt="">
            </div>
            <div class="project-infos col-12  col-md-8">
                <div class="project-primary-infos">
                    <h2 class="project-title">Coco Lolo</h2>
                    <p class="published-time"> - Il y une semaine</p>
                    <p class="project-nbViews">20 vues</p>
<!--                                <button class="profil-contact-btn project-btn" style="display:inline-block;"> <span class="sprite sprite-profil-message"></span> <span class="button-name" style="display:none;">Contacter</span></button>-->
                </div>
                <div class="project-secondary-infos">
                    <strong class="project-techo">Technologie(s) utilisée(s)</strong>
                    <strong class="project-categorie">Catégorie : Multimédia</strong>
                    <ul class="project-techno-list">
                        <li class="project-techno-list-items">Unity2D</li>
                        <li class="project-techno-list-items">Photoshop CC2018</li>
                        <li class="project-techno-list-items">Visual StudioCode</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{{-- </div>
<div class="content-container project">
        <div class="row project-header">
            <div class="project-image-container col-12  col-md-4">    
                <img src="img/videogames.jpg" class="project-image" alt="">
            </div>
            <div class="project-infos col-12  col-md-8">
                <div class="project-primary-infos">
                    <h2 class="project-title">Coco Lolo</h2>
                    <p class="published-time"> - Il y une semaine</p>
                    <p class="project-nbViews">20 vues</p>
<!--                                <button class="profil-contact-btn project-btn" style="display:inline-block;"> <span class="sprite sprite-profil-message"></span> <span class="button-name" style="display:none;">Contacter</span></button>-->
                </div>
                <div class="project-secondary-infos">
                    <strong class="project-techo">Technologie(s) utilisée(s)</strong>
                    <strong class="project-categorie">Catégorie : Multimédia</strong>
                    <ul class="project-techno-list">
                        <li class="project-techno-list-items">Unity2D</li>
                        <li class="project-techno-list-items">Photoshop CC2018</li>
                        <li class="project-techno-list-items">Visual StudioCode</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="project-content">
            <p class="project-description">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est numquam expedita voluptatibus praesentium impedit vero iusto provident, animi temporibus amet? Rerum inventore maiores cumque, hic a eius aspernatur ab impedit. </br></br>
                Sit amet, consectetur adipisicing elit. Perferendis molestiae voluptates rerum. Eligendi quo dolore atque illo veniam at, sint quisquam aperiam quod, cum voluptas. Labore accusamus magnam esse at. </br></br> Nemo aliquam, omnis. Odit aspernatur ullam dolore quibusdam amet aperiam autem alias doloribus incidunt excepturi adipisci, itaque rem obcaecati necessitatibus maiores odio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Sit amet, consectetur adipisicing elit. Perferendis molestiae voluptates rerum. Eligendi quo dolore atque illo veniam at, sint quisquam aperiam quod, cum voluptas. Labore accusamus magnam esse at. </br></br> Nemo aliquam, omnis. Odit aspernatur ullam dolore quibusdam amet aperiam autem alias doloribus incidunt excepturi adipisci, itaque rem obcaecati necessitatibus maiores odio. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            </p>
        </div>
        <div class="project-gallery row">
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            <div class="col-4">
                <img src="img/videogames.jpg" alt="">
            </div>
            
        </div> --}}
        </div>
@endsection

