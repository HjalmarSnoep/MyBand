<div class="content__wrapper">
  <div style="text-align: left" class="content__head">Tour schema</div>

  <div class="content__head--border"></div>
  <div class="tour__content">

  <div class="tour__content--wrapper">

{foreach from=$tours item = tour}
  <div class="tour-item">
    <div class="datum">
      {$tour.date} - <i class="fa fa-clock-o"></i> {$tour.time}
    </div>

      <div class="artiesten">
        {$tour.artist}
      </div>

      <div class="locatie">
        {$tour.location}
      </div>

      <div class="tickets">
        <a href="#"><i class="fa fa-ticket"></i> TICKETS KOPEN</a>
      </div>
  </div>
        <div class="content__head--border"></div>
    {/foreach}

  </div>
    </div>

    <div class="pagination">
      {if $page gt 1}
      <a href="{$site_url}/index.php?pagina=tour&page={$page-1}"><i class="fa fa-angle-left"></i> Vorige pagina</a>
      {/if}

      Huidige pagina: {$page}

      {if $page lt $number_of_pages}
      <a href="{$site_url}/index.php?pagina=tour&page={$page+1}"><i class="fa fa-angle-right"></i> Volgende pagina</a>
      {/if}
    </div>

  </div>
