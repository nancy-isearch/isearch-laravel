<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Breadcrumb</title>
    <link rel="stylesheet" href="/src/css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="/src/css/compress-css/main-style-V2.min.css" />
    <style>
      .breadcrumb {
        padding: 14px 0;
        background: #ffffff;
        border-top: 1px solid #e2e8f0;
      }
      .bc-in {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
        font-size: 14px;
        color: #6b7280;
        list-style: none;
        padding: 0;
        margin: 0;
      }
      .bc-in svg.icon--cc {
        --cc-icon-size: 14px;
        --cc-icon-color: #6b7280;
      }
      .bc-in a {
        color: var(--primary-color, #2563eb);
        text-decoration: none;
      }
      .bc-in a:hover {
        text-decoration: underline;
      }
      .bc-separator {
        display: inline-flex;
        align-items: center;
      }
    </style>
  </head>
  <body>
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
  </body>
</html>
