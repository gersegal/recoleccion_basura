<div class="card has-table has-mobile-sort-spaced">
    <header class="card-header">
    <?php if($section == "Solicitudes_completas"): ?>
        <p class="card-header-title">
            Solicitudes completas
        </p>
    <?php else: ?>
        <p class="card-header-title">
            Solicitudes de recolección
        </p>
    <?php endif ?>
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
                <th>Email</th>
                <th>No. depto</th>
                <th>Basura a reciclar</th>
                <th>Kilos</th>
                <th>Optin</th>
                <th>Fecha de recoleccion</th>
                <th>Fecha de registro</th>
                <th>Estatus</th>
                <th>Actualizar Estatus</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($retrieve_transactions as $transaction){ ?>
                    <tr>
                        <td data-label="Id"><?php echo $transaction['id'] ?></td>
                        <td data-label="Email"><?php echo $transaction['usr_email'] ?></td>
                        <td data-label="No. Depto"><?php echo $transaction['no_depto'] ?></td>
                        <td data-label="Basura a reciclar"><?php echo $transaction['basura_reciclar'] ?></td>
                        <td data-label="Kilos"><?php echo $transaction['kilos'] ?></td>
                        <td data-label="Optin"><?php echo $transaction['optin'] ?></td>
                        <td data-label="Fecha de recoleccion"><?php echo $transaction['fecha_recoleccion'] ?></td>
                        <td data-label="Fecha de registro"><?php echo $transaction['fecha_registro'] ?></td>
                        <td data-label="Estatus"><?php echo $transaction['estatus'] ?></td>
                        <td class="is-actions-cell">
                            <div class="buttons">
                            <?php if($section == "Solicitudes_completas"): ?>
                                    <a
                                    href="editar-estatus.php?editar=<?php echo $transaction['id'] ?>&estatus=<?php echo $transaction['estatus'] ?>"
                                    class="button is-small is-primary"
                                    type="button"
                                    >
                                        <span class="icon"
                                            ><i class="mdi mdi-refresh"></i
                                        ></span>
                                    </a>
                                <?php else: ?>
                                    <a
                                href="editar-estatus.php?editar=<?php echo $transaction['id'] ?>&estatus=<?php echo $transaction['estatus'] ?>"
                                class="button is-small is-primary"
                                type="button"
                                >
                                    <span class="icon"
                                        ><i class="mdi mdi-check"></i
                                    ></span>
                                </a>
                            <?php endif ?>

                                <?php if($section == "Solicitudes_completas"): ?>
                                <?php else: ?>
                                <a onclick="return confirm('Seguro que quieres borrar: <?php echo $transaction['id'] ?>?');" href="./delete-solicitud.php?solicitudid=<?php echo $transaction['id'] ?>">
                                    <button
                                    class="button is-small is-danger"
                                    type="button"
                                    >
                                    <span class="icon"
                                        ><i class="mdi mdi-trash-can"></i
                                    ></span>
                                    </button>
                                </a>
                                <?php endif ?>
                            </div>
                        </td>

                        <!---
                        <td class="is-actions-cell">
                            <div class="buttons is-right">
                                <a
                                href="editar-producto.php?editar=<?php echo $transaction['id'] ?>"
                                class="button is-small is-primary"
                                type="button"
                                >
                                    <span class="icon"
                                        ><i class="mdi mdi-pencil"></i
                                    ></span>
                                </a>
                                <a onclick="return confirm('Seguro que quieres borrar: <?php echo $transaction['prod_name'] ?>?');" href="./delete-prod.php?prodid=<?php echo $prod['id'] ?>">
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
                        --->
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

