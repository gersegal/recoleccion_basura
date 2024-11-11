<div class="card has-table has-mobile-sort-spaced">
    <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
            Clients
        </p>
    </header>


    <div class="card-content">
    <div class="b-table has-pagination">
        <div class="table-wrapper has-mobile-cards">
        <table
            class="table is-fullwidth is-striped is-hoverable is-sortable is-fullwidth"
        >
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Alias</th>
                <th>Email</th>
                <th>Departamento</th>
                <th>Fecha de registro</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($prods_pag as $prod){ ?>
                    <tr>
                        <td data-label="Id"><?php echo $prod['id'] ?></td>
                        <td data-label="Nombre"><?php echo $prod['usr_nombre'] ?></td>
                        <td data-label="Alias"><?php echo $prod['usr_alias'] ?></td>
                        <td data-label="Email"><?php echo $prod['usr_email'] ?></td>
                        <td data-label="Departamento"><?php echo $prod['usr_depto'] ?></td>
                        <td data-label="Fecha de registro"><?php echo $prod['registro_fecha'] ?></td>
                        <td class="is-actions-cell">
                            <div class="buttons is-right">
                                <a
                                href="editar-producto.php?editar=<?php echo $prod['id'] ?>"
                                class="button is-small is-primary"
                                type="button"
                                >
                                    <span class="icon"
                                        ><i class="mdi mdi-pencil"></i
                                    ></span>
                                </a>
                                <a onclick="return confirm('Seguro que quieres borrar: <?php echo $prod['prod_name'] ?>?');" href="./delete-prod.php?prodid=<?php echo $prod['id'] ?>">
                                    <button
                                    class="button is-small is-danger"
                                    type="button"
                                    >
                                    <span class="icon"
                                        ><i class="mdi mdi-trash-can"></i
                                    ></span>
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        <!--Pagination-->
        <div id="paginationBtns" class="notification">
          <div class="level">
              <div class="level-left">
                  <div class="level-item">
                      <?php for($p = 1; $p < $total_pages + 1; $p++){ ?>
                          <?php if($p == $page): ?>
                              <a class="pagination-link is-current" href="?page=<?php echo $p ?>"><?php echo $p ?></a>
                          <?php else: ?>
                              <a class="pagination-link" href="?page=<?php echo $p ?>"><?php echo $p ?></a>
                          <?php endif; ?>
                      <?php } ?>
                      <?php if($total_pages > 1){ ?>
                          <?php if($page == 1){ ?>
                              <a href="?page=<?= $page + 1 ?>" class="pagination-next">Next page</a>
                          <?php }else if($page >= $total_pages){ ?>
                              <a href="?page=<?= $page - 1 ?>" class="pagination-previous">Previous page</a>
                          <?php }else{ ?>
                              <a href="?page=<?= $page + 1 ?>" class="pagination-next">Next</a>
                              <a href="?page=<?= $page - 1 ?>" class="pagination-previous">Previous page</a>
                          <?php }?>
                      <?php } ?>
                  </div>
              </div>
              <div class="level-right">
                  <?php if($total_pages <= 1): ?>
                  <div class="level-item">
                      <small>Página <?php echo $page ?></small>
                  </div>
                  <?php else: ?>
                  <div class="level-item">
                      <small>Página <?php echo $page ?> de <?php echo round($total_pages) ?></small>
                  </div>
                  <?php endif; ?>
              </div>
          </div>
        </div>
    </div>
</div>


</div>

