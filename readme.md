
# MultiSiteMetaTag

O módulo MultiSiteMetaTag é uma extensão do Magento 2 que adiciona Meta Tags hreflang às páginas CMS compartilhadas entre diferentes store-views em um ambiente de loja multi-site. Essa funcionalidade ajuda a resolver problemas de conteúdo duplicado e melhora o SEO do site.

## Instalação

Você pode instalar este módulo usando o Composer. Certifique-se de que o Composer está instalado em seu sistema e execute o seguinte comando na raiz do seu projeto Magento:

`composer config repositories.wgerenutti/multisitemetatag vcs git@github.com:wgerenutti/multisitemetatag.git` 
 `composer require wgerenutti/multisitemetatag:^1`

Após a instalação bem-sucedida, execute os comandos de atualização do Magento para habilitar o módulo:

`php bin/magento module:enable Wgerenutti_MultiSiteMetaTag`
`php bin/magento setup:upgrade`
`php bin/magento cache:clean`

## Objetivos do Módulo

O objetivo principal do MultiSiteMetaTag é adicionar Meta Tags hreflang às páginas CMS que são compartilhadas entre diferentes store-views em um ambiente de loja multi-site. Essas Meta Tags ajudam os mecanismos de busca a entender em quais idiomas e regiões o conteúdo está disponível, melhorando assim o SEO e evitando problemas de conteúdo duplicado.

----------

# MultiSiteMetaTag

The MultiSiteMetaTag module is a Magento 2 extension that adds hreflang Meta Tags to CMS pages shared between different store-views in a multi-site store environment. This functionality helps to address duplicate content issues and enhances the SEO of the site.

## Installation

You can install this module using Composer. Make sure Composer is installed on your system and run the following command in the root of your Magento project:

`composer config repositories.wgerenutti/multisitemetatag vcs git@github.com:wgerenutti/multisitemetatag.git` 
 `composer require wgerenutti/multisitemetatag:^1`

After successful installation, run Magento update commands to enable the module:

`php bin/magento module:enable Wgerenutti_MultiSiteMetaTag`
`php bin/magento setup:upgrade`
`php bin/magento cache:clean`
 

## Module Objectives

The main objective of MultiSiteMetaTag is to add hreflang Meta Tags to CMS pages that are shared between different store-views in a multi-site store environment. These Meta Tags help search engines understand in which languages and regions the content is available, thereby improving SEO and avoiding duplicate content issues.

