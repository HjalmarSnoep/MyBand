<div style="text-align: center" class="content__wrapper">
  <div style="text-align: left" class="content__head">Nieuwste releases</div>
  <div class="content__head--border"></div>

  {foreach from=$releases item = release}
  <div class="release-item">
    <div style="
    background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./assets/images/releases/{$release.cover}');
     background-position: ceter center; background-repeat: no-repeat"
      class="release-cover">
      <div class="album-name">
        {$release.name}
      </div>
      <div class="release-date">
        {$release.date}
      </div>

      </div>
<div class="iframe">
  <iframe src="{$release.widget_url}" width="400" height="400" frameborder="0" allowtransparency="true"></iframe>

</div>
  </div>
  {/foreach}
  </div>
  </div>
</div>
