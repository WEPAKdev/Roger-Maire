<div id="categories-container">
    <div class="row">
        {foreach from=$categories item=categorie name=cats}
            {assign var='categoryLink' value=$link->getcategoryLink($categorie.id, $categorie.link_rewrite)}
        {/foreach}

        <div class="categorie" =
    </div>
</div>