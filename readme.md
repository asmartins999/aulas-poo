<h1><strong>Anotações - Curso POO</strong></h1>

<h2>ORIENTAÇÃO A OBJETOS</h2>
<li> class = possui os atributos (características), métodos (funções). É o molde do objeto;</li>
<li> objeto = algo que pode ser caracterizado, possui estado e ações.</li>

<h3>VISIBILIDADE</h3>
<li> public = totalmente visível;</li>
<li> private = visível apenas dentro da mesma classe;</li>
<li> protected = visível para família do objeto.</li>

<h3>MÉTODOS ESPECIAIS</h3>
<li> getters = métodos públicos que usam atributos privados para buscar informações;
<li> setters = métodos públicos que usam atributos privados e podem modificá-los;
<li> constructors = métodos que são executados automaticamente ao instanciar um objeto, servem para definir características e comportamentos pré-definidos e default. Obs.: pode ter o mesmo nome da classe.

<h2>EHP - ENCAPSULAMENTO, HERANÇA E POLIMORFISMO</h2>
Pilares da POO (Modelo de 3 pilares - 4º pilar ABSTRAÇÃO esta dentro de ENCAPSULAMENTO)

<hr>
<h3>ENCAPSULAMENTO</h3>
 <ul>
 	<li>Conceito -> cápsula;</li>
	 <li> Oculta partes independentes da implementação;</li>
	 <li>Permite construir partes invisíveis ao mundo exterior;</li>
	 <li>As informações solicitadas externamente seram tratadas pela cápsula (interface);</li>
	 <li>Não depende de outro pilar;</li>
	 <li>É uma boa prática, nāo é obrigatório.</li>
 </ul>
<h3>VANTAGENS - ENCAPSULAMENTO</h3>
<ul>
	<li>Tornar mudanças invisíveis;</li>
	<li>Facilitar a reutilizaçāo do código;</li>
	<li>Reduzir efeitos colatareais ao código.</li>
</ul>
<h3>CRIANDO UMA INTERFACE (CONCEITO)</h3>
<ul>
	<li>Interface tem um nome;</li>
	<li>Interface não possui atributos;</li>
	<li>Possui somente métodos;</li>
	<li>O métodos da interface são abstratos (não tem configurações, apenas chamam a função da classe);</li>
	<li>Os métodos da interface geralmente são públicos;</li>
	<li>A interface deve ser ligada a classe através do comando implements.</li>
</ul>
<hr>
<h2>HERANÇA</h2>
<ul>
	<li>Permite basear uma classe em outra pré-existente;</li>
	<li>A nova classe não sera recriada do zero, mas com base na classe mãe;</li>
	<li>A herança se aplica aos atributos e métodos;</li>
	<li>Herança não depende do Encapsulamento;</li>
	<li>Uma classe é filiada a outra através do comando extends;</li>
	<li>A classe mãe pode se chamar progenitora ou superclasse;</li>
	<li>A classe filha pode se chamar subclasse;</li>
	<li>Não é necessário declarar atributos e métodos da superclasse na subclasse, os mesmos já são herdados da classe mãe;
	</li>
</ul>
<br>
<h3>NAVEGAÇÃO HERANÇA</h3>
<ul>
	<li>Classes mãe são chamadas: progenitoras, super-classes;</li>
	<li>Classes filho são chamadas de sub-classe;</li>
	<li>Sub-classes herdão tudo de suas ancestrais (mãe, avó e etc...) de acordo com as proriedades public, private e protected;</li>
	<li>Classes que não possuem super-classe chamam-se <strong>raiz</strong>(é a primeira classe, mãe de todas);</li>
	<li>Classes filhas que não possuem filhas chamam-se: <strong>folhas</strong>;</li>
	<li>A classe <strong>Raiz</strong> está localizada no top da árvore e as classes <strong>folhas</strong> estão localizadas abaixo da raiz;</li>
	<li><strong>Descendentes</strong>são as classes <strong>netas</strong>;</li>
	<li>Ancestrais são as classes <strong>avós;</strong></li>
	<li>Especialização se dá quando percorremos a árvore de cima pra baixo;</li>
	<li>Generalização se dá quando percorremos a árore de baixo pra cima;</li>
</ul>
<h3>TIPOS DE HERANÇA</h3>
<ul>
	<li>Herança de <strong>Implementação</strong> é quando uma classe filha herda as propriedades da classe mãe, porém não possui nenhuma propriedade em si mesma;</li>
	<li>Heranca de <strong>Diferença</strong> é aquela em que as classes filhos possuem propriedades e também herdão as propriedades da classe mãe.</li>
</ul>
<hr>
<h2>POLIMORFISMO</h2>
<ul>
	<li>Conceito - muitas formas. Permite que um mesmo nome represente vários comportamentos diferentes;</li>
	<li>Assinatura do Método - Verificar a quantidade e o tipo dos parâmetros;</li>
</ul>
<h3>TIPOS DE POLIMORFISMO</h3>
<h4>SOBREPOISÇÃO</h4>
<ul>
	<li>Acontece quando subtituímos um método de uma superclasse na sua assinatura;</li>
	<li>Tem a mesma assinatura;</li>
	<li>Os métodos estão em classes diferentes.</li>
</ul>
<h4>SOBRECARGA</h4> 
<ul>
	<li>Tem assinaturas diferentes;</li>
	<li>Os métodos estão na mesma classe.</li>
</ul>
<h3>ABSTRATO E FINAL (CONCEITO)</h3>
<ul>
	<h3>CLASSE ABSTRATA</h3>
	<li>Não pode ser instaciada;</li>
	<li>Só pode servir como progenitora;</li>
	<li>Não podem ser gerados objetos as partir da classe definida como abstrata.</li>
	<h3>MÉTODO ABSTRATO</h3>
	<li>Declarado, mas não implementado na progenitora;</li>
	<li>Só pode ser usado em uma interface ou classe abstrata;</li>
	<h3>CLASSE FINAL</h3>
	<li>Não pode ser herdada por outra classe;</li>
	<li>É obrigatoriamente uma folha (não pode ter filhos);</li>
	<h3>MÉTODO FINAL</h3>
	<li>Não pode ser sobrescrito pelas suas sub-classes;</li>
	<li>É obrigatoriamente herdado;</li>
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






