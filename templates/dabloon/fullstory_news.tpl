<div style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
    <ol itemprop="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumb size-bread">
      <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item speedbar-sep"><a itemprop="item" href="/" title="MCPEHaxs - Home"><span itemprop="name">MCPEHaxs</span></a><meta itemprop="position" content="1"></li> »
      <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a itemprop="item" href="{category-url}" title="Category"><span itemprop="name">{category}</span></a><meta itemprop="position" content="2"></li> »
      <li class="breadcrumb-item active" aria-current="page">{title}</li>
    </ol>
</div>
<article class="fullstory" itemprop="mainEntity" itemscope itemtype="https://schema.org/Article">
        <div class="mb-4">
            <h1 itemprop="headline" class="fw-bolder mb-1">{title}</h1>
            <div class="mb-2">
                <div class="head_info">
                    <span class="author_unb" itemprop="author" itemscope="" itemtype="https://schema.org/Person"><img alt="Avatar {login}" src="{avatar}" height="34" width="34"><a class="every-link author_unb_link" href="{profile-link}"><span itemprop="name">[profile]{login}[/profile]</span></a></span> 
                    <span>
                       <svg width="16" height="16" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M12 2a10 10 0 1010 10A10 10 0 0012 2zm0 18.5a8.5 8.5 0 118.5-8.5 8.51 8.51 0 01-8.5 8.5zm.42-14.21h-1.5V13h5.75v-1.5h-4.25z"></path>
                       </svg>
                       <time itemprop="datePublished" content="{date=c}">{date=H:i}, {date=d F Y}</time>
                    </span>
                    <span>
                       <a class="every-link" href="#comments">
                          <svg width="16" height="16" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                             <path d="M19 4a1 1 0 011 1v10a1 1 0 01-1 1H7.17l-.58.59L4 19.17V5a1 1 0 011-1h14m0-2H5a3 3 0 00-3 3v19l6-6h11a3 3 0 003-3V5a3 3 0 00-3-3z"></path>
                          </svg>
                          <span>{comments-num}</span> 
                       </a>
                    </span>
                    <span>
                       <svg width="16" height="16" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                          <path d="M16 7.99663C16 9.29828 12.7605 13.5 8.00309 13.5C3.30737 13.5 0 9.29828 0 7.99663C0 6.68823 3.31354 2.5 8.00309 2.5C12.7543 2.5 16 6.68823 16 7.99663ZM1.19707 7.99663C1.19707 8.89362 4.22676 12.3602 8.00309 12.3602C11.7671 12.3602 14.7968 8.89362 14.7968 7.99663C14.7968 7.24801 11.7671 3.63305 8.00309 3.63305C4.22676 3.63305 1.19707 7.24801 1.19707 7.99663ZM8 10C9.10457 10 10 9.10457 10 8C10 6.89543 9.10457 6 8 6C6.89543 6 6 6.89543 6 8C6 9.10457 6.89543 10 8 10Z"></path>
                       </svg>
                       {include file="engine/modules/views.php?views={views}"}
                    </span>
                    <span>
                        [edit]ред.[/edit]
                    </span>
                    <span>
                       [add-favorites]<i class="far fa-star"></i>[/add-favorites][del-favorites]<i class="fas fa-star"></i>[/del-favorites]
                    </span>
                 </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="badge bg-secondary text-decoration-none link-light">{category}</div>
                </div>
                <div class="col">
                    [rating-type-3]
                    <div class="rating-level rant-mt">
                    <div class="md-ratg md-rag">[rating-minus]<div class="button-icon-rt txt-eco-rt bg-eco-rt txt-danger-h button-icon-rt-ik"><span class="svg-icon svg-icon--lg"><svg viewBox="0 0 16 16" id="control-down"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.529 5.529c.26-.26.682-.26.942 0L8 9.057l3.528-3.528a.667.667 0 11.943.942l-4 4a.667.667 0 01-.942 0l-4-4a.667.667 0 010-.942z"></path></svg></span></div>[/rating-minus]
                      <div class="md-ragrf md-rkh md-rt-text">{rating}</div>[rating-plus]<div class="button-icon-rt txt-eco-rt bg-eco-rt md-rt-text-h button-icon-rt-ik"><span class="svg-icon svg-icon--lg"><svg viewBox="0 0 16 16" id="control-up"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.529 5.529c.26-.26.682-.26.942 0l4 4a.667.667 0 11-.943.942L8 6.943 4.47 10.47a.667.667 0 01-.942-.942l4-4z"></path></svg></span></div>[/rating-plus]</div>
                  </div>
                    [/rating-type-3]
                </div>
              </div>
        </div>
        <figure class="mb-4"><img class="img-fluid rounded" itemprop="image" data-src="{image-1}" decoding=async alt="Превью {title}" /></figure>
    <div class="mb-5" itemprop="articleBody">
        {full-story}
    </div>
    <div class="relateds">
        <div class="card">
            <h5 class="card-header">Рекомендуем</h5>
            <div class="card-body">
                <div class="autoplay">
                    {related-news}
                </div>
            </div>
          </div>
    </div>
    <div class="mb-5" id="comments">
        <div class="card bg-light">
            <div class="card-body">
                <span class="title-comm">Комментарии ({comments-num})</span>
                {addcomments}
                    {comments}
            </div>
        </div>
    </div>
</article>