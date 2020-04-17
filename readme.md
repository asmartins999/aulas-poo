<h1><strong>Anotações - Curso POO</strong></h1>

<h2>ORIENTAÇÃO A OBJETOS</h2>
<li> class = possui os atributos (características), métodos (funções). É o molde do objeto;</li>
<li> objeto = algo que pode ser caracterizado, possui estado e ações.</li>

<h3>VISIBILIDADE</h3>
<li> public = totalmente visivel;</li>
<li> private = visivel apenas dentro da mesma classe;</li>
<li> protected = visivel para familia de objeto.</li>

<h3>MÉTODOS ESPECIAIS</h3>
<li> getters = metodos publicos que usam atributos privados para buscar informações;
<li> setters = metodos publicos que usam atributos privados e podem modifica-los;
<li> constructors = metodos que sao executados automaticamente ao instanciar um objeto, serve para definir caracteristicas e comportamentos pre-definidos e default. Obs.: pode ter o mesmo nome da classe.

<h2>EHP - ENCAPSULAMENTO, HERANÇA E POLIMORFISMO</h2>
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
	<li>Não é necessário declarar atributos e metodos da superclasse na subclasse, os mesmo já sao herdados da classe mãe;
	</li>
</ul>
<br>
<h3>NAVEGAÇÃO HERANÇA</h3>
<ul>
	<li>Classes mãe são chamadas: progenitoras, super-classes;</li>
	<li>Classes filho são chamadas de sub-classe;</li>
	<li>Sub-classes herdão tudo de suas ancestrais (mãe, avó e etc...) de acordo com as proriedades public, private e protected;</li>
	<li>Classe que não possui super-classe chamam-se <strong>raiz</strong>(é a primeira classe, mãe de todas);</li>
	<li>Classes filhas que não possuem filhas chamam-se: <strong>folhas</strong>;</li>
	<li>A classe <strong>Raiz</strong> está localizada no top da árvore e as classes <strong>folhas</strong> estão localizadas abaixo da raiz;</li>
	<li><strong>Descendentes</strong>são as classes <strong>neta</strong>;</li>
	<li>Ancestrais são as classes <strong>avós;</strong></li>
	<li>Especialização se dá quando percorremos a árvore de cima pra baixo;</li>
	<li>Generalização se dá quando percorremos a árore de baixo pra cima;</li>
</ul>
<h3>TIPOS DE HERANÇA</h3>
<ul>
	<li>.</li>
</ul>


<hr>
<h3>RELACIONAMENTO ENTRE CLASSES</h3>

<h3>AGREGAÇÃO</h3>
<ul>
	<li>Tem um nome;</li>
	<li>Tem uma direção;</li>
	<li>Relação do TIPO tem 1;</li>
	<li>A classe agregada pode usar objetos e métodos da classe pai;</li>
	<li>Multiplicidades dos dois lados;</li>
	<li>Possui atributos e métodos.</li>
</ul>






