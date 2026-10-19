# Reflexión (Etapa 4)

Responde con tus palabras (mínimo 40 palabras por respuesta). Ver README, Etapa 4.

## Pregunta 1
Mi codigo es: 233f782e. Es un string, substr() siempre va a devolver texto, la razón por la que esto pasa es porque corta pedazos de otra información sin importar que sean numeros o letras. Si lo usara en una suma, PHP intentaria convertirlo en un numero. Leeria hasta 233, lo usa y muestra una advertencia por no ser un numero limpio. En resumen, daria error.

## Pregunta 2
$precio aparece como double porque gettype() es una funcion que usa ese nombre para los decimales. Double y Float son basicamente lo mismo en PHP, solo que var_dump() lo muestra como float(414.78). Da false porque los decimales se guardan en binario con un error, la suma seria 0.30000000....4. $n1 es interger. intdiv() devuleve solo la parte entera de la división y quita los decimales, mientras que / devulve el resultado completo con decimal.

## Pregunta 3
define() es una función que se ejecuta mientras corremos el programa y const se resuelve al compilar y solo va al nivel principal del archivo. En mi instalación con PHP 8.2.12 sobre Apache, define(´LAB8´, ´otra´) devolvio false, ya que la constante ya existia.
