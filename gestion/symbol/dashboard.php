<div class="tile is-ancestor">
    <div class="tile is-parent">
    <div class="card tile is-child">
        <div class="card-content">
        <div class="level is-mobile">
            <div class="level-item">
            <div class="is-widget-label">
            <?php if($section == "Solicitudes_completas"): ?>
                <p class="card-header-title">
                <h3 class="subtitle is-spaced">Solicitudes completas</h3>
                </p>
            <?php else: ?>
                <p class="card-header-title">
                <h3 class="subtitle is-spaced">Solicitudes de recoleccion</h3>
                </p>
            <?php endif ?>
            <h1 class="title"><?php echo $total_transactions ?></h1>
            </div>
            </div>
            <div class="level-item has-widget-icon">
            <div class="is-widget-icon">
                <span class="icon has-text-primary is-large"
                ><i class="mdi mdi-account-multiple mdi-48px"></i
                ></span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>

    <!---
    <div class="tile is-parent">
        <div class="card tile is-child">
            <div class="card-content">
            <div class="level is-mobile">
                <div class="level-item">
                <div class="is-widget-label">
                    <h3 class="subtitle is-spaced">Ventas</h3>
                    <h1 class="title">$7,770</h1>
                </div>
                </div>
                <div class="level-item has-widget-icon">
                <div class="is-widget-icon">
                    <span class="icon has-text-info is-large"
                    ><i class="mdi mdi-cart-outline mdi-48px"></i
                    ></span>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="tile is-parent">
        <div class="card tile is-child">
            <div class="card-content">
            <div class="level is-mobile">
                <div class="level-item">
                <div class="is-widget-label">
                    <h3 class="subtitle is-spaced">Ticket promedio</h3>
                    <h1 class="title">256%</h1>
                </div>
                </div>
                <div class="level-item has-widget-icon">
                <div class="is-widget-icon">
                    <span class="icon has-text-success is-large"
                    ><i class="mdi mdi-finance mdi-48px"></i
                    ></span>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    ---->
</div>