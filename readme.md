<h1><strong>Anotações - Curso POO</strong></h1>

<h2>ORIENTAÇÃO A OBJETOS</h2>
..* class = possui os atributos (características), métodos (funções). É o molde do objeto;
..* objeto = algo que pode ser caracterizado, possui estado e ações.

<h3>VISIBILIDADE</h3>
..* public = totalmente visivel;
..* private = visivel apenas dentro da mesma classe;
..* protected = visivel para familia de objeto.

<h3>MÉTODOS ESPECIAIS</h3>
..* getters = metodos publicos que usam atributos privados para buscar informações;
..* setters = metodos publicos que usam atributos privados e podem modifica-los;
..* constructors = metodos que sao executados automaticamente ao instanciar um objeto, serve para definir caracteristicas e comportamentos pre-definidos e default. Obs.: pode ter o mesmo nome da classe.

<h1>EHP - ENCAPSULAMENTO, HERANÇA E POLIMORFISMO</h1>
Pilares da POO (Modelo de 3 pilares - 4 pilar ABSTRAÇÃO esta dentro de ENCAPSULAMENTO)

<hr>
<h3>ENCAPSULAMENTO</h3>
 ..* Conceito -> capsula;
 ..* Oculta partes independentes da implementação;
 ..* Permite construir partes invisíveis ao mundo exterior;
 ..* As informações solicitadas externamente seram tratadas pela capsula (interface);
 ..* A capsula se comunicará com os itens internos do objeto;
 ..* Não depende de outro pilar;
 ..* É uma boa prática, nāo é obrigatório.

<h3>VANTAGENS - ENCAPSULAMENTO</h3>
 ..* Tornar mudanças invisíveis;
 ..* Facilitar a reutiliçāo do código;
 ..* Reduzir efeitos colatareais ao código.

<h3>CRIANDO UMA INTERFACE (CONCEITO)</h3>
 ..* Interface tem um nome;
 ..* Interface nao possui atributos;
 ..* Possui somente metodos;
 ..* O metodos da interface são abstratos (não tem configurações, apenas chamam a função da classe);
 ..* Os metodos da interface geralmente são públicos;
 ..* A interface deve ser ligada a classe através do comando implements.

<hr>
<h3>HERANÇA</h3>
..* Permite basear uma classe em outra pré-existente;
..* A nova classe não sera recriada do zero, mas com base na classe mãe;
..* A herança se aplica aos atributos e metodos;
..* Herança nao dependete do Encapsulamento;
..* Uma classe é filiada a outra atravé do comando extends;
..* A classe mãe pode se chamar progenitora ou superclasse;
..* A classe filha pode se chamar subclasse;
..* Não é necessário declarar atributos e metodos da superclasse na subclasse, os mesmo já sao herdados da classe mãe;


<hr>
<h2>RELACIONAMENTO ENTRE CLASSES</h2>

<h3>AGREGAÇÃO</h3>
..* Tem um nome;
..* Tem uma direção;
..* Relação do TIPO tem 1;
..* A classe agregada pode usar objetos e métodos da classe pai;
..* Multiplicidades dos dois lados;
..* Possui atributos e métodos.







