ESwfobjectWidget ���������� Adobe Flash Player ������� � ������� SWFObject 2.
===========================

�������� SWFObject ������� �� http://code.google.com/p/swfobject/

�������������
-----
� �������������:
~~~
[php]
$this->beginWidget('ext.yiiext.widgets.swfobject.ESwfObjectWidget',array(
	// ��� ��� ����������. �� ��������� 'div.
	'tag'=>'div',
	// ��������� ����������.
	'htmlOptions'=>array(),
	// ������ �� ���� ����.
	'swfUrl'=>'/files/movie.swf',
	// ������ ������.
	'width'=>100,
	// ������ ������.
	'height'=>50,
	// ���������� � ������ ���� ������.
	'version'=>'8',
	// ������ flashvars.
	'flashvars'=>array(),
	// ������ params.
	'params'=>array(),
	// ������ attributes.
	'attributes'=>array(),
	// Callback-�������.
	'callbackFn'=>false,
	// ������� �������.
	'scriptPosition'=>CClientScript::POS_READY
));
����� ������� ����� ������� ������������ � �������� �� ���������� ����-�����.
$this->endWidget();
~~~
