<div id="categories-container">
    <div class="row">
        {foreach from=$categories item=categorie name=cats}
            {assign var='categoryLink' value=$link->getcategoryLink($categorie.id, $categorie.link_cat)}
            <div class="categorie row">
                {if $categorie@iteration > 1 }
                <div class="categorie-top-separator container-fluid">
                </div>
                {/if}
                <div class="pic-categorie container col-md-6 col-xs-12">
                    <div class="img-container container-fluid">
                        <a href="{$categoryLink}">
                            <div class="img-content">
                                <img src="{$cat_img_dir}{$categorie.id}.jpg" alt="{$categorie.titre}" title="{$categorie.titre}" class="img-responsive"/>
                            </div>
                            <div class="img-title col-md-6 col-xs-12">
                                <p>{$categorie.titre}</p>
                                <p>{$marque}</p>
                            </div>
                            <div class="goto">
                                <p>Decouvrez le</p>
                            </div>
                        </a>
                    </div>
                    <div class="img">

                    </div>
                </div>
                <div class="text-categorie container col-md-6 col-xs-12">
                    <div class="title-content">
                        <p>{$categorie.titre}</p>
                    </div>
                    <div class="desc-content">
                        {$categorie.description|strip_tags}
                    </div>
                    <div class="promo-content">
                        <h2>OFFRE SPECIALE</h2>
                        <p>Les 500 premiers numérotés !</p>
                        <p>50 euro au lieu de 60 !</p>
                    </div>
                </div>
                <div class="categorie-bottom-separator container-fluid">

                </div>
            </div>
        {/foreach}
    </div>
</div>