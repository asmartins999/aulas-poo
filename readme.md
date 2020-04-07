			Anotações - Curso POO

Orientação a Objetos

- class = possui os atributos (características), métodos (funções). É o molde do objeto.

- objeto = algo que pode ser caracterizado, possui estado e ações.

VISIBILIDADE
- public = totalmente visivel.
- private = visivel apenas dentro da mesma classe;
- protected = visivel para familia de objeto.

MÉTODOS ESPECIAIS
- getters = metodos publicos que usam atributos privados para buscar informações;

- setters = metodos publicos que usam atributos privados e podem modifica-los;

- constructors = metodos que sao executados automaticamente ao instanciar um objeto, serve para definir caracteristicas e comportamentos pre-definidos e default. Obs.: pode ter o mesmo nome da classe.

================================================
Pilares da POO (Modelo de 3 pilares - 4 pilar ABSTRAÇÃO esta dentro de ENCAPSULAMENTO)

 * EHP = Encapsulamento, Herança e Polimorfismo;

Encapsulamento
 * Conceito -> capsula;
 * Oculta partes independentes da implementação;
 * Permite construir partes invisíveis ao mundo exterior;
 * As informações solicitadas externamente seram tratadas pela capsula (interface);
 * A capsula se comunicará com os itens internos do objeto;
 * É uma boa prática, nāo é obrigatório.

Encapsulamento - Vantagens
 * Tornar mudanças invisíveis;
 * Facilitar a reutiliçāo do código;
 * Reduzir efeitos colatareais ao código.

Criando uma interface (conceito)
 * Interface tem um nome;
 * Interface nao possui atributos;
 * Possui somente metodos;
 * O metodos da interface são abstratos (não tem configurações, apenas chamam a função da classe);
 * Os metodos da interface geralmente são públicos;
 * A interface deve ser ligada a classe.

===============================================
RELACIONAMENTO ENTRE CLASSES

AGREGAÇÃO
* Tem um nome;
* Tem uma direção;
* Relação do TIPO tem 1;
* A classe agregada pode usar objetos e métodos da classe pai;
* Multiplicidades dos dois lados;
* Possui atributos e métodos;







