<form action="/" method="get" class="row g-2 text-center mb-2 justify-content-center">
    <div class="col-9">
        <input type="hidden" name="post_type" value="publications">
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="form-control" placeholder="publication or keyword" required autocomplete="off">
    </div>
    <div class="col-1 d-grid gap-2">
        <button type="submit" class="btn btn-danger" ><i class="bi bi-search" style="color: white;"></i></button>
    </div>
</form>

