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
 <ul>
 	<li>Conceito -> capsula;</li>
	 <li> Oculta partes independentes da implementação;</li>
	 <li>Permite construir partes invisíveis ao mundo exterior;</li>
	 <li>As informações solicitadas externamente seram tratadas pela capsula (interface);</li>
	 <li>Não depende de outro pilar;</li>
	 <li>É uma boa prática, nāo é obrigatório.</li>
 </ul>
<h3>VANTAGENS - ENCAPSULAMENTO</h3>
<ul>
	<li>Tornar mudanças invisíveis;</li>
	<li>Facilitar a reutiliçāo do código;</li>
	<li>Reduzir efeitos colatareais ao código.</li>
</ul>
<h3>CRIANDO UMA INTERFACE (CONCEITO)</h3>
<ul>
	<li>Interface tem um nome;</li>
	<li>Interface nao possui atributos;</li>
	<li>Possui somente metodos;</li>
	<li>O metodos da interface são abstratos (não tem configurações, apenas chamam a função da classe);</li>
	<li>Os metodos da interface geralmente são públicos;</li>
	<li>A interface deve ser ligada a classe através do comando implements.</li>
</ul>
<hr>
<h3>HERANÇA</h3>
<ul>
	<li>Permite basear uma classe em outra pré-existente;</li>
	<li>A nova classe não sera recriada do zero, mas com base na classe mãe;</li>
	<li>A herança se aplica aos atributos e metodos;</li>
	<li>Herança nao dependete do Encapsulamento;</li>
	<li>Uma classe é filiada a outra atravé do comando extends;</li>
	<li>A classe mãe pode se chamar progenitora ou superclasse;</li>
	<li>A classe filha pode se chamar subclasse;</li>
	<li>Não é necessário declarar atributos e metodos da superclasse na subclasse, os mesmo já sao herdados da classe mãe;</li>
</ul>

<hr>
<h2>RELACIONAMENTO ENTRE CLASSES</h2>

<h3>AGREGAÇÃO</h3>
<ul>
	<li>Tem um nome;</li>
	<li>Tem uma direção;</li>
	<li>Relação do TIPO tem 1;</li>
	<li>A classe agregada pode usar objetos e métodos da classe pai;</li>
	<li>Multiplicidades dos dois lados;</li>
	<li>Possui atributos e métodos.</li>
</ul>






