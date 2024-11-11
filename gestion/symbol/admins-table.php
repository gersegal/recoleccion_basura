<div class="card has-table has-mobile-sort-spaced">
    <header class="card-header">
        <p class="card-header-title">
            <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
            Administradores
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
                <th>Nombre</th>
                <th>Email</th>
                <th>Borrar admin</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($retrieve_admin as $admin){ ?>
                    <tr>
                        <td data-label="Nombre"><?php echo $admin['admin_name'] ?></td>
                        <td data-label="Precio"><?php echo $admin['admin_email'] ?></td>
                        <?php if($superadmin  == true): ?>
                            <?php if($admin['id'] == 1): ?>
                            <?php else: ?>
                                <td class="is-actions-cell">
                                    <div class="buttons is-left">
                                        <a onclick="return confirm('Seguro que quieres borrar: <?php echo $admin['id'] ?>?');" href="./delete-admin.php?admin=<?php echo $admin['id'] ?>">
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
                            <?php endif ?>
                        <?php else: ?>
                            <td><strong>Accion autorizada a superadmin</strong></td>
                        <?php endif ?>
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

