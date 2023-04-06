# Adapter

O **Adapter** é um padrão de projeto estrutural que permite objetos com interfaces incompatíveis colaborarem entre si.

## Analogia com o mundo real
Imagine que você tenha sido contratado para criar uma aplicação que faz postagens simultâneas em várias redes sociais. Você inclui no seu projeto as libs disponibilizadas pelas redes sociais para a sua linguagem de programação e descobre que cada uma delas envia a mensagem de uma forma diferente, você precisaria de uma **adaptador** para padronizar a forma de postagem.

## Aplicação
Utilize a classe **Adapt** quando você quer usar uma classe existente, mas sua interface não for compatível com o resto do seu código.

Utilize o padrão quando você quer reutilizar diversas subclasses existentes que não possuam alguma funcionalidade comum que não pode ser adicionada a superclasse.

## Implementação
Em nosso algoritmo, dividimos o problema na pasta *original* e a solução na pasta *refactored*.
Alteramos nosso arquivo index.php para, ao invés de fazer as chamadas diretas para cada lib, criamos uma interface que indicará como devemos implementar cada adaptador e nesses fazemos a chamada as suas respectivas redes sociais.

## Fonte
- <a href="https://refactoring.guru/design-patterns/adapter" target="_blank">Refactoring Guru</a>
