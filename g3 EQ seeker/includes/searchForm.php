<form action="search.php" method="GET" class="form-inline form-search">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" value="<?= $_GET['search']??'' ?>" aria-label="Search">
    <button class="btn btn-primary" type="submit">Search</button>
</form>