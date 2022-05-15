<form action="/" method="get" class="row g-2 text-center mb-2">
    <div class="col-10">
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control" placeholder="article, publication, keyword" required autocomplete="off">
    </div>
    <div class="col-2 d-grid gap-2">
        <button type="submit" class="btn btn-danger" ><i class="bi bi-search" style="color: white;"></i></button>
    </div>
</form>
