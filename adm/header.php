<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-white" id="sidenav-main" data-color="dark">
    <div>
        <a class="navbar-brand m-0 text-center" href="index.php">
            <img src="assets/img/logo_k2.png" width="175" class="navbar-brand-img" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="index.php" class="nav-link <?= $pagina == 'Dashboard' ? 'active' : '' ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-tachometer iconeHeader" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <div class="accordion accordion-flush " id="accordionExample">
                <div class="accordion-item">

                    <button class="accordion-button collapsed nav-link <?= $pagina == 'Produtos' || $pagina == 'ProdutosCapa' || $pagina == 'TodosProdutos' || $pagina == 'ProdutosNormais' ? 'active' : '' ?>" type="button" id="btnCadastro" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa fa-cubes iconeHeader" aria-hidden="true"></i>
                        </div>
                        <span class="nav-link-text ms-1">Produtos</span>
                    </button>

                    <div id="collapseOne" class="accordion-collapse collapse <?= $pagina == 'ProdutosCapa' || $pagina == 'ProdutosNormais' || $pagina == 'TodosProdutos' ? 'show' : '' ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="links-menu-lateral-accordion ul_lista" style="list-style: none; margin-left: -34px;">
                                <li class="nav-item">
                                    <a href="produtotodos_list.php" class="nav-link <?= $pagina == 'TodosProdutos' ? 'active' : '' ?>">
                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-tags iconeHeader" aria-hidden="true"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Todos Produtos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="links-menu-lateral-accordion" style="list-style: none; margin-left: -34px;">
                                <li class="nav-item">
                                    <a href="produtocapa_list.php" class="nav-link <?= $pagina == 'ProdutosCapa' ? 'active' : '' ?>">
                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-tags iconeHeader" aria-hidden="true"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Capa Produtos</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="links-menu-lateral-accordion" style="list-style: none; margin-left: -34px;">
                                <li class="nav-item">
                                    <a href="produtonormais_list.php" class="nav-link <?= $pagina == 'ProdutosNormais' ? 'active' : '' ?>">
                                        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                            <i class="fa-solid fa-tags iconeHeader" aria-hidden="true"></i>
                                        </div>
                                        <span class="nav-link-text ms-1">Produtos Normais</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <li class="nav-item">
                <a href="categoria_list.php" class="nav-link <?= $pagina == 'Categoria' ? 'active' : '' ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-list-ol iconeHeader" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Categoria</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="parceiros_list.php" class="nav-link <?= $pagina == 'Parceiros' ? 'active' : '' ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-users iconeHeader" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Parceiros</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="banner_list.php" class="nav-link <?= $pagina == 'Banner' ? 'active' : '' ?>">
                    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-file iconeHeader" aria-hidden="true"></i>
                    </div>
                    <span class="nav-link-text ms-1">Banners</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="login.php" class="nav-link <?= $pagina == 'Sub Materiais' ? 'active' : '' ?>">

                    <span class="nav-link-text ms-1">TELA DE LOGIN</span>
                </a>
            </li>
        </ul>
    </div>
</aside>