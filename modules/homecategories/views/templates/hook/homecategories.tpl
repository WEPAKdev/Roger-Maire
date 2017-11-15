<div id="categories-container">
    <div class="row">
        {foreach from=$categories item=categorie name=cats}
            {assign var='categoryLink' value=$link->getcategoryLink($categorie.id, $categorie.link_cat)}
            <div class="categorie">
                {if $categorie@iteration > 1 }
                <div class="categorie-top-separator">
                </div>
                {/if}
                <div class="pic-categorie container col-md-6 col-xs-12">
                    <div class="img-container container-fluid">
                        <a href="{$categoryLink}">
                            <div class="img-content">
                                <img src="{$cat_img_dir}/img/c/{$categorie.id}.jpg" alt="{$categorie.titre}" title="{$categorie.titre}" class="img-responsive"/>
                            </div>
                            <div class="goto">
                                <p>Decouvrez le</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-categorie container col-md-6 col-xs-12">
                    <div class="title-content">
                        <p><span>{$categorie.titre|upper}</span> - <span> {$marque}</span></p>
                    </div>
                    <div class="desc-content">
                        <p>{$categorie.description|strip_tags}</p>
                    </div>
                    {if $categorie@iteration == 1 }
                    <div class="promo-content">
                        <h2>OFFRE SPECIALE</h2>
                        <p>Les 500 premiers numérotés !</p>
                        <p>50 euro au lieu de 60 !</p>
                    </div>
                    {/if}
                </div>
                <div class="categorie-bottom-separator container-fluid">
                </div>
            </div>
        {/foreach}
    </div>
</div>