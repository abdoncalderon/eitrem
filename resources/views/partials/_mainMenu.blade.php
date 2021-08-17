<section class="sidebar">

    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p> 
                @AUTH
                {{ auth()->user()->name }}
                @ENDAUTH
            </p>
            <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
        </div>
    </div>

    <!-- Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        
        <li class="header">MENU PRINCIPAL</li>

        <!-- Dashboard Menu -->
        <li><a href="#"><i class="fa fa-bar-chart"></i> <span>Panel</span></a></li>
        
        <!-- Resources Menu -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-desktop"></i>
                <span>Recursos</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('employees.index')}}"> Personas </a></li>
                <li><a href="{{ route('equipments.index')}}"> Hardware </a></li>
                <li><a href="#"> Software </a></li>
                <li><a href="#"> Servicios </a></li>
            </ul>
        </li>

        <!-- Management Menu -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-line-chart"></i>
                <span>Gestión</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('providers.index')}}"> Proveedores </a></li>
                <li><a href="{{ route('accounts.index')}}"> Cuentas </a></li>
                <li><a href="{{ route('billings.index')}}"> Facturas </a></li>
                <li><a href="{{ route('budgets.resume')}}"> Presupuestos </a></li>
            </ul>
        </li>

        <!-- Report Menu -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-print"></i>
                <span>Informes</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"> Inventarios </a></li>
                <li><a href="#"> Registro Individual </a></li>
                <li><a href="#"> Historial de Uso </a></li>
                <li><a href="#"> Auditoria </a></li>
            </ul>
        </li>

        <!-- Settings Menu -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-sliders"></i>
                <span>Configuración</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('types.index')}}"> Tipos </a></li>
                <li><a href="{{ route('brands.index')}}"> Marcas </a></li>
                <li><a href="{{ route('models.index')}}"> Modelos </a></li>
                <li><a href="{{ route('regions.index')}}"> Regiones </a></li>
                <li><a href="{{ route('offices.index')}}"> Oficinas </a></li>
                <li><a href="{{ route('sectors.index')}}"> Áreas </a></li>
                <li><a href="{{ route('positions.index')}}"> Cargos </a></li>
                <li><a href="{{ route('oss.index')}}"> Sistemas Operativos </a></li>
                <li><a href="{{ route('systems.index')}}"> Sistemas </a></li>
                <li><a href="{{ route('cellularPlans.index')}}"> Planes Celulares </a></li>
            </ul>
        </li>

        <!-- Administration Menu -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-lock"></i>
                <span>Administración</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ route('users.index') }}"> Usuarios </a></li>
                <li><a href="{{ route('roles.index') }}"> Roles </a></li>
                <li><a href="#"> Importar Datos </a></li>
                <li><a href="#"> Parámetros </a></li>
            </ul>
        </li>

        <!-- Help Menu -->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-question-circle-o"></i>
                <span>Ayuda</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"> Guia de Uso </a></li>
                <li><a href="#"> Contactos </a></li>
            </ul>
        </li>

    </ul>
    
</section>