<!--Currently may utilise this and make a shortcode, we shall see-->

<!--Written with Bulma classes currently, however this can be adapted for most frameworks-->
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-12-mobile is-4-tablet is-4-desktop">
        <div class="search_bar is-relative">
          <form action="/" method="get" autocomplete="off" class="is-relative">
						<!-- This is obviously the input box and function including the keyup which utilises the Ajax call-->
              <input type="text" name="s" placeholder="Search away...." id="keyword" class="input_search" onkeyup="fetch()">
              <span class="input-highlight is-hidden"></span>
              <button class="is-hidden"><!--Just in case that we need a button... its not a necessity... or is it?!-->
                  Search
              </button>
          </form>
					<!--Returned data content-->
          <div class="search_result" id="datafetch">
              <ul>
                  <li>&nbsp;</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
