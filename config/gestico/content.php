<?php

$icons = require __DIR__.'/icons.php';

return [
    /*** //   #####   Página de inicio Home   ###### // */
    'home_hero' => [
        ['value' => '24h', 'text' => 'Información preparada para consulta online'],
        ['value' => '360°', 'text' => 'Gestión administrativa, fiscal, laboral y contable'],
        ['value' => '1', 'text' => 'Interlocutor coordinando incidencias y acuerdos'],
    ],
    'home-resolver' => [
        ['wallet', 'Gestión económica ', 'Presupuestos, remesas, estados de cuentas, pagos, cierres e informes periódicos.'],
        ['scale', 'Fiscal y laboral', 'Modelos fiscales, obligaciones laborales, nóminas, seguros sociales y seguimiento documental.'],
        ['wrench', 'Fincas e incidencias', 'Proveedores, mantenimiento, reparaciones, seguros, siniestros y ejecución de acuerdos.'],
        ['users', 'Comunicación clara', 'Convocatorias, actas, circulares, trazabilidad de decisiones y atención a propietarios.'],
    ],
    'home-metodo' => [
        ['01', 'Diagnóstico', 'Revisión de cuentas, contratos, incidencias y necesidades reales.'],
        ['02', 'Plan de gestión', 'Calendario fiscal/laboral, presupuesto, prioridades y circuito documental.'],
        ['03', 'Seguimiento', 'Informes claros, reuniones preparadas y acceso a documentación relevante.'],
        ['04', 'Ejecución', 'De tareas económico-financieras, fiscales y laborales de la Comunidad'],
    ],
    'home-client-portal' => [
        ['Contratos y documentación comunitaria', false, $icons['documentos']],
        ['Movimientos bancarios e informes', false, $icons['movimientos']],
        ['Facturas, presupuestos y cierres', false, $icons['facturas']],
        ['Comunicaciones y avisos importantes', true, $icons['avisos']],
    ],
    /*** //   #####   Página de servicios   ###### // */
    'servicios-hacemos' => [
        ['icon' => 'wallet', 'title' => 'Gestión económico-financiera', 'text' => 'Elaboramos presupuestos, controlamos remesas y pagos, revisamos conciliaciones bancarias y presentamos estados de cuentas comprensibles para la junta.'],
        ['icon' => 'clipboard', 'title' => 'Juntas, actas y acuerdos', 'text' => 'Preparamos convocatorias, redactamos actas, damos seguimiento a los acuerdos aprobados y mantenemos la documentación de la comunidad siempre localizada.'],
        ['icon' => 'scale', 'title' => 'Morosidad y reclamaciones', 'text' => 'Seguimos cuotas pendientes, apoyamos la reclamación amistosa y preparamos la información necesaria cuando hay que iniciar acciones formales.'],
        ['icon' => 'wrench', 'title' => 'Mantenimiento e incidencias', 'text' => 'Coordinamos reparaciones, pedimos presupuestos, supervisamos incidencias y hacemos seguimiento de proveedores, contratos y siniestros.'],
        ['icon' => 'users', 'title' => 'Asesoramiento legal y vecinal', 'text' => 'Aportamos criterio ante derramas, obras, uso de elementos comunes, conflictos entre propietarios y decisiones de gasto.'],
        ['icon' => 'folder', 'title' => 'Fiscalidad y archivo', 'text' => 'Organizamos la documentación económica, controlamos obligaciones fiscales y dejamos el expediente preparado para consultas y auditorías internas.'],
    ],
    'servicios-normativa' => [
        ['01', 'Plan anual', 'Presupuesto, cuotas, fondo de reserva, vencimientos y prioridades preparadas antes de la junta.'],
        ['02', 'Libro de acuerdos', 'Convocatorias, actas, asistentes, cuotas de participación y acuerdos cerrados con trazabilidad.'],
        ['03', 'Conservación', 'Reparaciones urgentes, mantenimiento preventivo, proveedores y documentación técnica localizada.'],
        ['04', 'Morosidad', 'Seguimiento de cuotas, certificados de deuda y expediente preparado si la comunidad decide reclamar.'],
    ],
    'servicios-trabajo' => [
        ['05', 'Diagnóstico inicial', 'Revisamos la situación de la comunidad, su documentación, sus pendientes y los procesos que necesitan orden.'],
        ['06', 'Planificación', 'Definimos prioridades económicas, técnicas y administrativas para que el trabajo avance por bloques.'],
        ['07', 'Ejecución y seguimiento', 'Coordinamos proveedores, incidencias, juntas y acuerdos con trazabilidad y control.'],
        ['08', 'Información continua', 'Mantenemos a vecinos y presidentes informados con explicaciones claras y acceso ordenado a la documentación.'],
    ],
    /*** //   #####   Página de fincas   ###### // */
    'fincas-hacemos' => [
        ['icon' => 'clipboard', 'title' => 'Juntas y acuerdos', 'text' => 'Preparamos convocatorias, actas y seguimiento de lo aprobado para que la comunidad tenga un registro claro.'],
        ['icon' => 'wallet', 'title' => 'Economía de la comunidad', 'text' => 'Controlamos cuotas, remesas, pagos y previsiones para que las cuentas se entiendan sin ruido.'],
        ['icon' => 'wrench', 'title' => 'Mantenimiento e incidencias', 'text' => 'Damos seguimiento a reparaciones, proveedores, siniestros y actuaciones pendientes hasta cerrar cada asunto.'],
        ['icon' => 'folder', 'title' => 'Gestión de seguros', 'text' => 'Negociación, concentración, partes y reclamaciones.'],
    ],
    'fincas-situaciones' => [
        ['01', 'Control Cuotas', 'Seguimiento de cuotas pendientes y preparación del expediente si hay que reclamar.'],
        ['02', 'Obras y derramas', 'Control de presupuestos, aprobaciones y ejecución para evitar desviaciones.'],
        ['03', 'Siniestro o avería', 'Coordinación con aseguradoras, técnicos y proveedores hasta cerrar el incidente.'],
        ['04', 'Documentación dispersa', 'Ordenamos contratos, actas, facturas y comunicaciones para que todo esté accesible.'],
    ],
    'fincas-gestion' => [
        ['title' => 'Antes de la junta', 'text' => 'Revisión de cuentas, puntos del orden del día, presupuestos y documentación para decidir con datos.'],
        ['title' => 'Después de aprobar', 'text' => 'Ejecución de acuerdos, encargos a proveedores, avisos a propietarios y calendario de seguimiento.'],
        ['title' => 'Durante el año', 'text' => 'Control de pagos, incidencias, contratos, seguros y archivo para que la información no se disperse.'],
    ],
    /*** //   #####   Página de asesoría   ###### // */
    'asesoria-cubrimos' => [
        ['wallet', 'Contabilidad y cierres', 'Preparación de presupuestos, seguimiento de gastos, cierres periódicos y comparativas para detectar desviaciones con tiempo.'],
        ['clipboard', 'Fiscalidad y modelos', 'Control del calendario tributario, revisión de modelos, archivo de justificantes y preparación de la documentación de soporte.'],
        ['scale', 'Laboral y Seguridad Social', 'Gestión de nóminas, contratos, seguros sociales, altas, bajas y cambios que exigen coordinación con exactitud.'],
        ['folder', 'Análisis y previsión', 'Proyección de gastos, lectura de tendencias, preparación de escenarios y apoyo a la junta antes de tomar decisiones.'],
    ],
    'asesoria-trabajamos' => [
        ['01', 'Revisión', 'Analizamos la situación económica, los pendientes y el calendario de obligaciones.'],
        ['02', 'Planificación', 'Agrupamos facturas, justificantes, comunicaciones y documentos de respaldo.'],
        ['03', 'Seguimiento', 'Controlamos vencimientos, incidencias y desviaciones para actuar antes de que crezcan.'],
        ['04', 'Explicación', 'Traducimos los números a un lenguaje claro para la junta y los propietarios.'],
    ],
    'asesoria-badges' => [
        ['label' => 'Contabilidad', 'icon' => 'calculator'],
        ['label' => 'Fiscalidad', 'icon' => 'file-check'],
        ['label' => 'Laboral', 'icon' => 'shield-check'],
        ['label' => 'Previsión y control', 'icon' => 'chart-line'],
    ],
    /*** //   #####   Página de contacto   ###### // */
    'contact' => [
        ['title' => 'Tamaño y órganos', 'text' => 'Número de propietarios, presidencia, junta directiva y frecuencia de reuniones.'],
        ['title' => 'Situación económica', 'text' => 'Cuotas, morosidad, fondo disponible, derramas previstas y gastos recurrentes.'],
        ['title' => 'Documentación', 'text' => 'Actas, contratos, facturas, seguros, presupuestos y archivo histórico disponible.'],
        ['title' => 'Incidencias', 'text' => 'Obras, averías, proveedores activos, siniestros y asuntos pendientes de acuerdo.'],
    ],
];
