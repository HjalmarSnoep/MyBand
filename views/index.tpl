<div class="content__wrapper">
  <div class="links__content">
    <div class="content__head">Over Logic</div>
    <div class="content__head--border"></div>
    {foreach from=$index_text item = index}
    <p>
      {$index.index_about_text}
    </p>
    {/foreach}
  </div>

  <div class="rechts__content">
    <div class="content__head">Recent Nieuws</div>
    <div class="content__head--border"></div>
    {foreach from=$index_news item = news}
    <div class="example-2 card">
  <div style="background: url(./assets/images/nieuws/{$news.image}) center center no-repeat;" class="wrapper">
    <div style="background: rgba(0, 0, 0, 0.3)" class="header">
      <div class="date">
        <span class="day"><i class="fa fa-clock-o"></i> {$news.date}</span>
      </div>
      <ul class="menu-content">

      </ul>
    </div>
    <div style="background: rgba(0, 0, 0, 0.6)" class="data">
      <div class="content">
        <span class="author">{$news.author}</span>
        <h1 class="title"><a href="/nieuws/{$news.id}">{$news.title}</a></h1>
        <p class="text">{$news.description}</p>
        <br /><br />
      </div>
    </div>
  </div>
</div>
{/foreach}
</div>


  </div>
</div>
