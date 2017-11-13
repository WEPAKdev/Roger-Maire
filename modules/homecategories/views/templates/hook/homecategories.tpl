<div id="categories-container">
    <div class="row">
        {foreach from=$categories item=categorie name=cats}
            {assign var='categoryLink' value=$link->getcategoryLink($categorie.id, $categorie.link_rewrite)}
            <div class="categorie row">
                <div class="pic-categorie col-md-6 col-xs-12">
                    <div class="img-container container-fluid">
                        <img src="{$img_cat_dir}{$categorie.id}.jpg" alt="{$categorie.titre}" title="{$categorie.titre}" class="img-responsive"/>
                    </div>
                </div>
                <div class="container col-md-6 col-xs-12">
                    <div class="title-content">
                        <p>{$categorie.titre}</p>
                    </div>

                </div>
            </div>
        {/foreach}
    </div>
</div>