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
define( 'DB_NAME', 'cursoemvideowordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'z!=M!~/7C_kSxDU_7h,LQ<w=V*8!yYf.T1dBftRH}jijS{P=yF)qF^$:/H,w:N`X' );
define( 'SECURE_AUTH_KEY',  'yLmeg|oDrn!7 CPo:TmMmT]|km1^-7I~z.uFAHECbCme!UJ&AH)yLX2^uh5,Eq-H' );
define( 'LOGGED_IN_KEY',    'c$rpk6[z, wKCwBj n<]G^k,I?)dbbIDR?.Tk_,z+][Y0{>&:<tKeN9~ p8/};*O' );
define( 'NONCE_KEY',        '=J<0#8e?x!ieJL?2K7{4k0pT*Ch lcKQ:[:pS+w ^kh.g(5AwTpzo^-DqAkz@Rba' );
define( 'AUTH_SALT',        ';[4l)oN*hO4Tv9 a,aA.lgV[s@_gkl(oDl2AJ=Un*=bbR0q&$shuzQZ_Y|{Be5%y' );
define( 'SECURE_AUTH_SALT', 'w82B.o:u]c;iaGuan]&_poFF_vWD:VU#!2g1av-D6Lb,u6MAEdC8)>}S@AUC$8(~' );
define( 'LOGGED_IN_SALT',   'X?V+R `eNNEzwa5*W0,+BpNHhN]09x+c8##NWN9RG;c#R:t7 C`7O#!HS&!&$u?5' );
define( 'NONCE_SALT',       ')DDq},FBs1PU~?3fy}iU*zEP&YW!n]eh`4itftofkbrT&}jX~q=+>(iyM.N_$1XU' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

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
