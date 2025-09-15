<li class="pc-item">
  <a href="{{ route('backoffice.dashboard') }}" class="pc-link">
    <span class="pc-micon">
      <i class="ph-duotone ph-gauge"></i>
    </span>
    <span class="pc-mtext" data-i18n="Tableau de bord">Tableau de bord</span>
  </a>
</li>

{{-- 🛒 Menu Produits --}}
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <i class="ph-duotone ph-basket"></i>
    </span>
    <span class="pc-mtext" data-i18n="Produits">Produits</span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.products.index') }}" data-i18n="Tous les produits">Tous les produits</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.products.create') }}" data-i18n="Ajouter un produit">Ajouter un produit</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.product-categories.index') }}" data-i18n="Catégories de produits">Catégories de produits</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.product-categories.create') }}" data-i18n="Ajouter une catégorie">Ajouter une catégorie</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.product-tags.index') }}" data-i18n="Étiquettes">Étiquettes</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.product-tags.create') }}" data-i18n="Ajouter une étiquette">Ajouter une étiquette</a>
    </li>
  </ul>
</li>

{{-- 📰 Menu Blog / Articles --}}
<li class="pc-item pc-hasmenu">
  <a href="#!" class="pc-link">
    <span class="pc-micon">
      <i class="ph-duotone ph-newspaper"></i>
    </span>
    <span class="pc-mtext" data-i18n="Articles">Articles</span>
    <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
  </a>
  <ul class="pc-submenu">
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.blog_posts.index') }}" data-i18n="Tous les articles">Tous les articles</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.blog_posts.create') }}" data-i18n="Ajouter un article">Ajouter un article</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.blog_categories.index') }}" data-i18n="Catégories d’articles">Catégories d’articles</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.blog_categories.create') }}" data-i18n="Ajouter une catégorie">Ajouter une catégorie</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.blog_tags.index') }}" data-i18n="Tags">Tags</a>
    </li>
    <li class="pc-item">
      <a class="pc-link" href="{{ route('backoffice.blog_tags.create') }}" data-i18n="Ajouter un tag">Ajouter un tag</a>
    </li>
  </ul>
</li>
