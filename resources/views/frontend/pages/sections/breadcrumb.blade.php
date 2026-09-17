
<!-- BREADCRUMB COMPONENT WITH SEO SCHEMA -->
<nav class="breadcrumb" aria-label="Breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
  <div class="container-fluid">
    <ol class="bc-in">
      <!-- Step 1: Home -->
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/" itemprop="item"><span itemprop="name">Home</span></a>
        <meta itemprop="position" content="1" />
      </li>
      <!-- Separator -->
      <li class="bc-separator" aria-hidden="true">
        <svg class="icon--cc"><use href="/src/assets/icons.svg#arrow-right-01-stroke-rounded"></use></svg>
      </li>
      <!-- Step 2: Parent Category -->
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a href="/search-engine-optimization/seo-services.html" itemprop="item">
          <span itemprop="name">SEO Services</span>
        </a>
        <meta itemprop="position" content="2" />
      </li>
      <!-- Separator -->
      <li class="bc-separator" aria-hidden="true">
        <svg class="icon--cc"><use href="/src/assets/icons.svg#arrow-right-01-stroke-rounded"></use></svg>
      </li>
      <!-- Step 3: Current Page -->
      <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <span itemprop="name" aria-current="page">Enterprise SEO</span>
        <meta itemprop="position" content="3" />
      </li>
    </ol>
  </div>
</nav>
