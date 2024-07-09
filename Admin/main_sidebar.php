<style>
  .fa{
    color: green;
  }
</style>

  <aside class="main-sidebar">
    <section class="sidebar">
      

      <ul class="sidebar-menu" data-widget="tree">

        <li class="<?php if($_GET['page']==''){echo 'active';} ?>"><a href="./?page=''"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>

        <li class="treeview <?php if($_GET['page']=='supplier'){echo 'active';} ?>">
          <a href="../#">
            <i class="fa fa-truck"></i>
            <span>Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($_GET['page']=='supplier'){echo 'active';} ?>"><a href="./supplier.php?page=supplier"><i class="fa fa-user-plus"></i> Add Supplier</a></li>
            <!-- <li><a href="./type.php"><i class="fa fa-circle-o"></i> View Supplier</a></li> -->
          </ul>
        </li>

        <li class="treeview <?php if($_GET['page']=='customer'){echo 'active';} ?>">
          <a href="../#">
            <i class="fa fa-users"></i>
            <span>Customer</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="./customer.php?page=customer"><i class="fa fa-user-plus"></i> Add Customer</a></li>
            <!-- <li><a href="./type.php"><i class="fa fa-circle-o"></i> View Supplier</a></li> -->
          </ul>
        </li>

        
        
        <li class="treeview <?php if($_GET['page']=='stock-in'){echo 'active';} ?>">
          <a href="../#">
            <i class="fa fa-cart-plus"></i>
            <span>Stock-in</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($_GET['page']=='stock-in'){echo 'active';} ?>"><a href="./purchase.php?page=stock-in"><i class="fa fa-circle-o"></i> New Stock-in</a></li>
            <li><a href="./purchase-invoice-report.php?page=stock-in"><i class="fa fa-list-ul"></i> Stock-in List</a></li>
          </ul>
        </li>


        <li class="treeview <?php if($_GET['page']=='medicine'){echo 'active';} ?>">
          <a href="../#">
            <i class="fa fa-leaf"></i>
            <span>Medicine</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="./medCategory.php?page=medicine"><i class="fa fa-circle-o"></i> Medicine Category</a></li>
            <li><a href="./medType.php?page=medicine"><i class="fa fa-circle-o"></i> Medicine Type</a></li>
            <li><a href="./unit.php?page=medicine"><i class="fa fa-circle-o"></i> Medicine Units</a></li>
            <li><a href="./manufacturer.php?page=medicine"><i class="fa fa-circle-o"></i> Medicine Manufacturer</a></li>
            <li><a href="./generics.php?page=medicine"><i class="fa fa-circle-o"></i> Medicine Generics</a></li>
            <li><a href="./hsncode.php?page=medicine"><i class="fa fa-circle-o"></i> Medicine HSN Code</a></li>
            <li><a href="./add_medicine.php?page=medicine"><i class="fa fa-circle-o"></i>Add Medicine</a></li>
          </ul>
        </li>


        
        


        
        

      

      
      </ul>
    </section>
  </aside>


