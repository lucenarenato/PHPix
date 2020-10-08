<?php
/*
 +------------------------------------------------------------------------+
 | PHPix                                                                  |
 +------------------------------------------------------------------------+
 | Copyright (c) 2020-2021 - OER Tecnologia                               |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@oertecnologia.com.br so we can send you a copy immediately. |
 |                                                                        |
 | @package   PHPix                                                       |
 | @copyright Copyright (c) 2020 OER Tecnologia oertecnologia.com.br      |
 | @license   http://opensource.org/licenses/mit-license The MIT License  |
 +------------------------------------------------------------------------+
 | Authors: Luiz Olivetti <luiz@oertecnologia.com.br>                     |
 |          Ricardo Gama <ricard.gama@gmail.com>                          |
 +------------------------------------------------------------------------+
*/
namespace PHPix;

/**
 * DICT API (1.0.0)
 * OpenAPI specification
 *
 * Suporte TI BCB: suporte.ti@bcb.gov.br
 * URL: https://www.bcb.gov.br/estabilidadefinanceira/pagamentosinstantaneos
 * License: Apache 2.0
 *
 * O Diretório de Identificadores de Contas Transacionais - DICT - é o serviço
 * do arranjo Pix que permite buscar detalhes de contas transacionais com chaves
 * de endereçamento mais convenientes para quem faz um pagamento. Entre os tipos
 * de chave atualmente disponíveis estão CPF, CNPJ, telefone, e-mail e EVP. As
 * informações retornadas pelo DICT permitem ao pagador confirmar a identidade
 * do recebedor, proporcionando uma experiência mais fácil e segura. Permitem
 * também ao PSP do pagador criar a  *  * mensagem de instrução de pagamento a
 * ser enviada para o sistema de liquidação com os detalhes de conta do
 * recebedor.
 */
class PHPix
{

  /**
   * PHPix version
   *
   * @string
   */
  const VERSION = "1.0-alpha";

  /**
  *
  */
  public function __construct()
  {

  }

  public static function getVersion()
  {
    return self::VERSION;
  }

}
