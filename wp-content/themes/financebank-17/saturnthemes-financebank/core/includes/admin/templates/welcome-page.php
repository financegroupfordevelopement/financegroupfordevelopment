<div class="wrap about-wrap theme-welcome-wrap">
    <h1><?php echo sprintf( esc_html__( 'Welcome to %s!', 'saturnthemes-financebank' ), $theme_name ); ?></h1>

    <div class="boxed getting-started">
        <h2>Getting started</h2>
        <p>
            Thanks for choosing <?php echo esc_html( $theme_name ); ?>!<br>
            <?php echo esc_html( $theme_name ); ?> is now installed and ready to use! Get ready to build something beautiful.
        </p>
        <p>Please follow steps below to getting started with the theme:</p>
        <ol>
            <li>Install required plugins</li>
            <li>Import demos to make your site look like our demo</li>
        </ol>
    </div>

    <div class="boxed free-plugins">
        <h2>1. Install required plugins</h2>
        <table class="wp-list-table widefat striped">
            <thead>
            <tr>
                <th>Plugin</th>
                <th>Version</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ( $required_plugins as $required_plugin ) {
                ?>
                <tr>
                    <td>
                        <?php
                        if ( isset( $required_plugin['required'] ) && ( $required_plugin['required'] == true ) ) {
                            if ( ! $this->is_plugin_active( $required_plugin['slug'] ) ) {
                                echo '<span>' . $required_plugin['name'] . '</span>';
                            } else {
                                echo '<span class="activated">' . $required_plugin['name'] . '</span>';
                            }
                        } else {
                            echo TGM_Plugin_Activation::get_instance()->get_info_link( $required_plugin['slug'] );
                        }
                        ?>
                    </td>
                    <td><?php echo( isset( $required_plugin['version'] ) ? $required_plugin['version'] : '' ); ?></td>
                    <td><?php echo( isset( $required_plugin['required'] ) && ( $required_plugin['required'] == true ) ? 'Required' : 'Recommended' ); ?></td>
                    <td>
                        <?php echo $required_plugin['action']; ?>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <div class="boxed import-demo">
        <h2>2. Import demos</h2>
        <?php if ( ! $this->is_plugin_active( 'saturnthemes-toolkit' ) ) : ?>
            Please install the required plugin <strong>SaturnThemes Toolkit</strong> above to activate the import demo!
        <?php else : ?>
            <?php do_action( 'saturnthemes_page_welcome_import_demos' ); ?>
        <?php endif; ?>
    </div>

    <div class="boxed get-support">
        <h2>Get support</h2>
        <p>If you have any question please don't hesitate to contact us via email <a href="mailto:saturnthemes@gmail.com">saturnthemes@gmail.com</a></p>
    </div>
</div>