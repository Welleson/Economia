<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'grupoeconomia_lanchonete' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'grupoeconomia_lanchonete' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '@ssw0rd@' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N.M.O>J:5HXNg!U*fK>V5fyGx^dnE,`^,ScK&ufr?S.H$T$lZ|Y{E|-z}nNI|nIG' );
define( 'SECURE_AUTH_KEY',  'B0Zgq%sO!!wWNYMISkL7Ci=qsz}){)+$Uwi})N<q-6 eoh{8k/9?DNhbUCHav~W|' );
define( 'LOGGED_IN_KEY',    'pujfj)7J&z`NTb(k4A><q#Yg0&G<Hv,_nfqF_=7kbP:g3vb{s*,iU5bc)2POV#r_' );
define( 'NONCE_KEY',        'U-]9-BtUX o`+&g@J{fc_]S5BHS!95W*7}q:00YWGa{@U[~z&@$oc7j$p{YNsDva' );
define( 'AUTH_SALT',        'j=smlw;PH9SNqKWUvHhF7QusgNL^[`V,VttlF8:APC,rCcWjp>R^L97kONdNhcce' );
define( 'SECURE_AUTH_SALT', 'tN/i|^.Tc#b1qC:.uhOQA(kdOQ k0c=_{gW6CedyNT}n`Vu$E~G#{=6]=%n-_x+f' );
define( 'LOGGED_IN_SALT',   'H&V@eNyRb4fe;vNy5Zl/GfoV2qX;;T1|Hc&!d~KEyF_L8C1:~Rhqo<ORA2=dvJFr' );
define( 'NONCE_SALT',       '*X8#m={@,- vCG!:t_xcN=;Y%Fo,J;QT}hSST`dZfVS DfP*4^-M5D[;wRpvt{sN' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
