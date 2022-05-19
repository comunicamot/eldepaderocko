<template>
  <Layout>
    <SliderCover>
      <template #swiper>
        <SwiperCover
          :images="['/image/web/nosotros/inicio_3.jpg']"
        ></SwiperCover>
      </template>
    </SliderCover>


    <div class="container mx-auto">


<main>
  <section class="table" id="datatable">

      <div class="container">
        <h1>Data Records</h1>
        <div class="entries-amount"><span>Show</span>
          <select class="select" id="change-record-count">
            <option value="5">5</option>
            <option value="10">10</option>
          </select><span class="hide-mobile">Entries</span>
        </div>
        <aside class="data-filter dropdown">
          <h2 class="dd-trigger">Filter by Status</h2>
          <ul class="filters dd-content">
            <li>
              <label><input type="checkbox" class="filter" data-value="Submitted" /> Submitted</label>
            </li>
            <li>
              <label><input type="checkbox" class="filter" data-value="Processing" /> Processing</label>
            </li>
            <li>
              <label><input type="checkbox" class="filter" data-value="Completed" /> Completed</label>
            </li>
            <li>
              <label><input type="checkbox" class="filter" data-value="Failed" > Failed</label>
            </li>
          </ul>
        </aside>
        <nav class="table-header">
          <ul class="table-sorter">
            <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
            <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
            <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
            <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
            <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
            <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
            <li class="th sort">Requests</li>
            <li class="th sort">Records</li>
          </ul>
        </nav>
      </div>

    <section class="table-body">
      <div class="container">
        <ul class="list">
          <li class="tr">
            <div class="td id">827301</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827302</div>
            <div class="td alt-id">ALT009</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <button class="border-btn">View Items</button>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827303</div>
            <div class="td alt-id">ALT001</div>
            <div class="td amounts">4</div>
            <div class="td created-date">2/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827304</div>
            <div class="td alt-id">ALT009</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">11/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827305</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">6</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827307</div>
            <div class="td alt-id">ALT001</div>
            <div class="td amounts">6</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827308</div>
            <div class="td alt-id">ALT005</div>
            <div class="td amounts">5</div>
            <div class="td created-date">3/15/2016</div>
            <div class="td due-date">10/15/2016</div>
            <div class="td status processing">Processing</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827309</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn inactive" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827310</div>
            <div class="td alt-id">ALT005</div>
            <div class="td amounts">3</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status failed">Failed</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn inactive" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827333</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827334</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827335</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">6</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827337</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">6</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827338</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">5</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status processing">Processing</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827339</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn inactive" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827340</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">3</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status failed">Failed</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn inactive" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827341</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827342</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827343</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
          <li class="tr">
            <div class="td id">827344</div>
            <div class="td alt-id">ALT008</div>
            <div class="td amounts">4</div>
            <div class="td created-date">1/15/2016</div>
            <div class="td due-date">12/15/2016</div>
            <div class="td status">Submitted</div>
            <div class="td requests">
              <button class="link">View Request</button>
            </div>
            <div class="td records">
              <input class="border-btn" type="button" value="View Items"/>
            </div>
            <ul class="table-sorter">
              <li class="th sort" data-sort="id">ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="alt-id">Alt ID<span class="spinner"></span></li>
              <li class="th sort" data-sort="amounts">Amounts<span class="spinner"></span></li>
              <li class="th sort" data-sort="created-date">Created<span class="spinner"></span></li>
              <li class="th sort" data-sort="due-date">Due Date<span class="spinner"></span></li>
              <li class="th sort" data-sort="status">Status<span class="spinner"></span></li>
              <li class="th sort">Requests</li>
              <li class="th sort">Records</li>
            </ul>
          </li>
        </ul>
      </div>
    </section>
    <footer class="table-footer">
      <nav class="container">
        <p class="showing">Showing <span id='page-first-item-number'>1</span> - <span id='page-last-item-number'>5</span> of <span id='record-count-total'>40</span></p>
        <div class="pagination">
          <button class="prev"></button>
          <ul class="pager"></ul>
          <button class="next">></button>
        </div>
        <input class="primary-btn" type="button" value="Action Button"/>
      </nav>
    </footer>
  </section>
</main>

    </div>

  </Layout>
</template>

<script>
import SliderCover from "@/components/SliderCoverLogin";
import SwiperCover from "@/components/web/SwiperCover";
import Layout from "@/components/web/Layout";
import ButtonDiv from "../../../components/ButtonDiv.vue";

export default {
  components: {
    SliderCover,
    SwiperCover,
    Layout,
    ButtonDiv,
  },


    methods: {


    geteventLogin() {
      
      
// DATA TABLE (Powered by List.js)
$(function() {
	var sortableClassValues = ['id', 'alt-id', 'samples', 'created-date', 'due-date', 'status'],
      pageRecordCount = $('#change-record-count option:selected').val(),
      activeFilters = [];

	var paginationOptions = {
		name: "pager",
		paginationClass: "pager",
		innerWindow: 1,
		left: 5,
		right: 1
	};

	var listOptions = {
		valueNames: sortableClassValues,
		page: pageRecordCount,
		plugins: [
			ListPagination(paginationOptions)
		]
	};

	var dataList = new List('datatable', listOptions);


	// Shown Entries select box listeners
	$('#change-record-count').change(function() {
		pageRecordCount = $('#change-record-count option:selected').val();

		dataList.page = pageRecordCount;

		dataList.update();

		$('.pager li:first').trigger('click');

		console.log('Shown Entries has changed to ' + pageRecordCount + ' per page...');

		checkPagerPosition();
	});

	// Filter Checkboxes
	$('.filter').change(function() {
		var isChecked = this.checked;
		var value = $(this).data("value");

		if (isChecked) {
			//  Add to list of active filters
			activeFilters.push(value);
		} else {
			// Remove from active filters
			activeFilters.splice(activeFilters.indexOf(value), 1);
		}
		console.log('Active filters are "' + activeFilters + '"...');

		dataList.filter(function(item) {
			if (activeFilters.length > 0) {
				return (activeFilters.indexOf(item.values().status)) > -1;
			}
			return true;
		});

		dataList.update();

		checkPagerPosition();

	});

	// PAGINATION PAGER CONTROLS

	// Previous button
	$('.prev').on('click', function() {
    var pagerLi = $('.pager').find('li');
		$.each(pagerLi, function(position, element) {
			if ($(element).is('.active')) {
				$(pagerLi[position - 1]).trigger('click');
			}
		});
		checkPagerPosition();
	});

	// Next button
	$('.next').on('click', function() {
    var pagerLi = $('.pager').find('li');
		$.each(pagerLi, function(position, element) {
			if ($(element).is('.active')) {
				$(pagerLi[position + 1]).trigger('click');
			}
		});
		checkPagerPosition();
	});

	// Page numbers
	$(document).on('click', '.page', function() {
		checkPagerPosition();
	});

	// Handles active state changes for .prev and .next
	function checkPagerPosition() {

		if ($('.pager li:first').hasClass('active')) {
			$('.prev').addClass('disabled');
		} else if ($('.pager li').length === 1) {
			$('.prev, .next').addClass('disabled');
		} else {
			$('.prev').removeClass('disabled');
		}
		// Check if we're on the last page and disable .next if true
		if ($('.pager li:last').hasClass('active')) {
			$('.next').addClass('disabled');
		} else {
			$('.next').removeClass('disabled');
		}
		updateRecordTracker();

	}

	function updateRecordTracker() {
		var pageNumber = $('.pager li.active .page').text(),
        missingPageItems = (pageRecordCount - dataList.visibleItems.length),
        firstPageItemNumber = (pageRecordCount * pageNumber - (pageRecordCount - 1)),
        lastPageItemNumber = (pageRecordCount * pageNumber - missingPageItems);

		// Disable .prev and .next controls if matching records are less than shown entries
		if (dataList.matchingItems.length < pageRecordCount) {
			$('.next, .prev').addClass('disabled');
		}

		// Show no results message in data table if it's empty
		if (dataList.visibleItems.length === 0 || dataList.matchingItems.length === 0) {
			// No Data Available message
			$('.table-body .container .list').append('<li class="tr"><p class="no-record">No Data Available</p></li>');

			// Sets showing value to 0
			$('#page-first-item-number, #page-last-item-number, #record-count-total').text('0');

			// Disables table header sorting
			$('.table-sorter, .th').removeClass('active').addClass('disabled').prop('disabled', true);

			console.log('Sorry there is no data available...');
		} else {
			// Enable table header sorting
			$('.table-sorter, .th').removeClass('disabled').addClass('active').prop('disabled', false);

			// Update records (i.e Showing 1 - 25 of 200)
			// Updates number of first record on current page
			$('#page-first-item-number').text(firstPageItemNumber);

			// Updates number of last record on current page
			$('#page-last-item-number').text(lastPageItemNumber);

			// Updates total count
			$('#record-count-total').text(dataList.matchingItems.length);

			console.log('Number of visible records available is ' + dataList.visibleItems.length);
			console.log('Number of matching records available is ' + dataList.matchingItems.length);
			console.log('Number of missing records on current page is ' + missingPageItems);
			console.log('Number of first record on current page is ' + firstPageItemNumber);
			console.log('Number of last record on current page is ' + lastPageItemNumber);
		}
		console.log('Checked Pager Position! Current page is ' + pageNumber);
		console.log('–––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––');

	}
  
  // GENERAL CLICK EVENTS
	// Dropdown Menu
	$('.dd-trigger').click(function(e) {
		e.preventDefault();

		$('.dropdown').toggleClass('active');

	});
  
	checkPagerPosition();

});
      
    },
  },
  mounted() {
    this.geteventLogin();
  },


};
</script>


<style>
.movil_trayectoria {
  display: flex;
  margin-bottom: 45px;
  margin-top: 45px;
  font-size: 23px;
  margin-left: 100px;
  margin-right: 100px;
}

@media only screen and (max-width: 600px) {
  .movil_trayectoria {
    display: flex;
    margin: 35px 20px;
    font-size: 23px;
  }
  .movil_trayectoria_icons {
    font-size: 10px;
  }
}

/* :::::::::::::::::::::::::::: tabla de reservas ::::::::::::::::::::::::: */
/* https://codepen.io/ClintHubbardJr/pen/ZLJNZK?editors=1010 */
main {
  overflow: hidden;
}

.container {
  max-width: 84em;
  margin-left: auto;
  margin-right: auto;
  padding: 0 1em;
}

main .disabled {
  color: #e6e6e6;
  cursor: not-allowed;
}

dl dt {
  margin-bottom: 2ex;
}
dl dd {
  margin-bottom: 6ex;
}

.logo {
  display: inline-block;
}
.logo a {
  color: #fff;
  text-decoration: none;
}

input,
button,
select,
textarea {
  font-family: "Source Sans Pro";
  cursor: pointer;
}
input:focus,
button:focus,
select:focus,
textarea:focus {
  outline: none;
}

h1,
.large-heading {
  margin: 3ex 0 2ex;
  font-size: 36px;
  font-weight: 300;
  color: #057ed8;
}

h2,
.sub-heading {
  margin: 2ex 0;
  line-height: 2;
  font-size: 20px;
  font-weight: 600;
}

header > h2 {
  border-bottom: 1px solid #e6e6e6;
}

.table-heading {
  margin: 1ex 0;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  color: #66696a;
}

.primary-btn {
  font-size: 16px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 1px;
  color: #fff;
  line-height: 1;
  display: inline-block;
  min-width: 290px;
  max-width: 320px;
  padding: 0 1em;
  line-height: 74px;
  vertical-align: middle;
  border: none;
  background-color: #0035a0;
}
.primary-btn:hover, .primary-btn:active, .primary-btn.active {
  background-color: #057ed8;
}

.border-btn {
  font-size: 12px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 1px;
  color: #057ed8;
  line-height: 1;
  display: inline-block;
  border: #057ed8 solid 1px;
  background-color: transparent;
  line-height: 38px;
  padding: 0 1em;
}
.border-btn:hover, .border-btn:active, .border-btn.active {
  color: #fff;
  background-color: #057ed8;
}
.border-btn.inactive, .border-btn.inactive:hover, .border-btn.inactive:active {
  color: #b3b3b3;
  border-color: #b3b3b3;
  background-color: transparent;
  text-align: center;
}
@media (min-width: 640px) {
  .border-btn.inactive, .border-btn.inactive:hover, .border-btn.inactive:active {
    padding: 0 1em;
  }
}

.link {
  font-size: 12px;
  font-weight: 700;
  text-align: center;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 1px;
  color: #057ed8;
  line-height: 1;
  border: 2px #057ed8 solid;
  padding: 2ex 1em;
  background-color: transparent;
  border: none;
}
.link:hover, .link:active, .link.active {
  color: rgba(5, 126, 216, 0.7);
}

.card {
  padding: 1ex 2em 5ex;
  box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.2);
  margin-bottom: 2ex;
}
@media (min-width: 767px) {
  .card {
    padding: 1.5ex 3em 6ex;
  }
}
@media (min-width: 1025px) {
  .card {
    padding: 2ex 4em 8ex;
  }
}
@media (min-width: 84em) {
  .card {
    padding: 2ex 6em 10ex;
  }
}

.dropdown {
  display: inline-block;
  min-width: 50px;
  /* border: 1px solid #e6e6e6; */
  border-radius: 5px;
  /* background-color: #fff; */
}
.dropdown .dd-trigger {
  padding: 1.5ex 3em 1.5ex 2em;
  border: none;
  background-color: #fff;
  color: #66696a;
  font-size: 13px;
  border-radius: 5px;
}
.dropdown .dd-trigger::after {
  content: "▼";
  color: gray;
  left: 87.5%;
  transition: transform 0.5s ease;
}
.dropdown .dd-content {
  overflow: hidden;
  max-height: 0;
  transition: max-height 0.5s ease;
}
.dropdown .dd-content li {
  padding: 1ex 2em;
}
.dropdown .dd-content li:hover, .dropdown .dd-content li:active {
  background-color: rgba(5, 126, 216, 0.1);
}
.dropdown.active {
  box-shadow: 0px 3px 4px 0px rgba(0, 0, 0, 0.2);
}
.dropdown.active .dd-trigger::after {
  transform: rotate(-180deg);
}
.dropdown.active .dd-content {
  max-height: 200px;
}

#page-header {
  position: fixed;
  top: 0;
  z-index: 10000;
  width: 100%;
}

.top-nav {
  background-color: #28333d;
  color: #fff;
}
.top-nav .container {
  padding-top: 1.5ex;
  padding-bottom: 1.5ex;
}
.top-nav h1 {
  margin: 0;
}

.sub-head {
  position: fixed;
  top: 66px;
  width: 100%;
  z-index: 10000;
  background-color: #fff;
  box-shadow: 0px 4px 10px 0px rgba(210, 210, 210, 0.5);
}
.sub-head .back-btn {
  position: absolute;
  top: 50%;
  left: 0;
  margin-top: -20px;
  width: 40px;
  height: 40px;
}
@media (min-width: 640px) {
  .sub-head .back-btn {
    margin-top: -25px;
    width: 50px;
    height: 50px;
  }
  .sub-head .back-btn::before {
    width: 27px;
    height: 17px;
    margin-left: -13.5px;
    margin-top: -8.5px;
  }
}
@media (min-width: 1025px) {
  .sub-head .back-btn {
    margin-top: -30px;
    width: 60px;
    height: 60px;
  }
  .sub-head .back-btn::before {
    width: 30px;
    height: 20px;
    margin-left: -15px;
    margin-top: -10px;
  }
}
.sub-head h1 {
  position: relative;
  display: inline-block;
  margin: 1.5ex 0 7ex;
  padding-left: 0;
  font-size: 24px;
}
@media (min-width: 640px) {
  .sub-head h1 {
    margin: 2ex 0;
  }
}
@media (min-width: 1025px) {
  .sub-head h1 {
    margin: 1ex 0;
    font-size: 36px;
  }
}
.sub-head section {
  padding-left: 12.5%;
}
.sub-head .entries-amount {
  position: absolute;
  top: auto;
  bottom: 2.5ex;
  right: auto;
  left: 1em;
  display: inline-block;
  padding: 0;
}
@media (min-width: 640px) {
  .sub-head .entries-amount {
    top: 2ex;
    right: 200px;
    left: auto;
    bottom: auto;
  }
}
@media (min-width: 1025px) {
  .sub-head .entries-amount {
    top: 2ex;
    right: 1em;
    left: auto;
    bottom: auto;
  }
}
.sub-head .entries-amount > span:first-of-type {
  margin-right: 1em;
}
.sub-head .entries-amount > span:last-of-type {
  margin-left: 1em;
}

.table {
  padding-top: 4ex;
}
@media (min-width: 1025px) {
  .table {
    padding-top: 0;
  }
}
.table .container {
  position: relative;
}

.data-filter {
  position: absolute;
  top: 61px;
  bottom: auto;
  right: 1em;
  padding: 0;
  background-color: #fff;
}
@media (min-width: 640px) {
  .data-filter {
    top: 2ex;
    bottom: auto;
    right: 1em;
  }
}
@media (min-width: 1025px) {
  .data-filter {
    top: 107%;
    left: 0;
    right: auto;
    bottom: auto;
    width: 10.5%;
    padding: 0 1em;
  }
}
@media (min-width: 1025px) {
  .data-filter.dropdown {
    border: 0;
  }
}
.data-filter.dropdown .dd-trigger {
  margin: 0;
}
@media (min-width: 1025px) {
  .data-filter.dropdown .dd-trigger {
    margin: 2ex 0;
    padding: 0;
    background-color: transparent;
  }
  .data-filter.dropdown .dd-trigger::after {
    display: none;
  }
}
@media (min-width: 1025px) {
  .data-filter.dropdown .dd-content {
    max-height: 200px;
  }
}
@media (min-width: 1025px) {
  .data-filter.dropdown .dd-content li {
    padding: 0;
  }
}
.data-filter h2 {
  color: #66696a;
  font-size: 13px;
  text-transform: uppercase;
}
.data-filter li {
  margin-bottom: 2ex;
}
.data-filter label {
  font-size: 13px;
}

.th {
  margin: 1ex 0;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  display: block;
  margin: 0;
  cursor: pointer;
}
.th .spinner {
  display: inline-block;
  width: 8px;
  height: 20px;
  margin-left: 0.5em;
  vertical-align: top;
}
.th .spinner::before, .th .spinner::after {
  display: inline-block;
  clear: both;
  width: 8px;
  height: 8px;
  font-size: 8px;
  color: #057ed8;
  float: left;
}
.th .spinner::before {
  content: "▲";
}
.th .spinner::after {
  content: "▼";
}
.th.disabled .spinner::before, .th.disabled .spinner::after {
  color: #e6e6e6;
}

.table-header {
  display: none;
  padding-top: 0;
  padding-left: 12.5%;
}
@media (min-width: 1025px) {
  .table-header {
    display: block;
  }
}
.table-header .table-sorter {
  display: block;
  line-height: 2;
  border: 0;
  overflow: hidden;
  padding-left: 1em;
  background-color: #fff;
  width: 100%;
  padding-right: 1em;
  background-color: transparent;
}
.table-header .table-sorter.disabled {
  position: relative;
}
.table-header .table-sorter.disabled::before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: transparent;
  z-index: 10001;
}
.table-header .th {
  float: left;
  width: 12.5%;
  padding: 2ex 0;
}

.table-body {
  width: 100%;
  min-height: 185px;
  overflow: hidden;
}
@media (min-width: 1025px) {
  .table-body .list {
    padding-left: 12.5%;
  }
}
.table-body .no-record {
  margin: 3ex 0 2ex;
  font-size: 36px;
  font-weight: 300;
  color: #057ed8;
  color: gray;
  text-align: center;
  margin: 0;
  line-height: 3;
}
.table-body .tr {
  position: relative;
  width: 100%;
  padding: 1ex 1em;
  overflow: hidden;
  line-height: 2;
  border: 1px solid #e6e6e6;
  margin: 0 1% 2ex;
}
.table-body .tr:hover {
  background-color: rgba(5, 126, 216, 0.1);
}
.table-body .tr > .table-sorter {
  position: absolute;
  top: 1ex;
  left: 1em;
  width: 115px;
  border: 0;
}
.table-body .tr > .table-sorter .th {
  font-size: 16px;
  line-height: 36px;
}
@media (min-width: 640px) {
  .table-body .tr {
    float: left;
    width: 48%;
  }
  .table-body .tr:nth-child(2n+1) {
    clear: left;
  }
}
@media (min-width: 1025px) {
  .table-body .tr {
    width: 100%;
    margin: 0;
    padding-left: 1em;
    line-height: 4;
    border-top: 0;
    border-right: 0;
    border-left: 0;
  }
  .table-body .tr > .table-sorter {
    display: none;
  }
}
.table-body .td {
  line-height: 36px;
  padding-left: 130px;
}
@media (min-width: 1025px) {
  .table-body .td {
    padding-top: 1ex;
    padding-left: 0;
    padding-bottom: 1ex;
    float: left;
    width: 12.5%;
    line-height: 3.5;
    vertical-align: middle;
  }
}
.table-body .td .link {
  padding-left: 0;
  padding-right: 0;
  text-align: left;
}
.table-body .td .border-btn {
  width: 100%;
  max-width: 140px;
}
@media (min-width: 1025px) {
  .table-body .td .border-btn {
    width: 100%;
  }
}
.table-body .td .control-indicator {
  top: 50%;
  margin-top: -9px;
}
.table-body .td.processing {
  font-style: italic;
}
.table-body .td.failed {
  margin-left: 130px;
  padding-left: 1.25em;
  color: #db073a;
}
.table-body .td.failed::before {
  left: 0;
  margin-left: 0;
}
@media (min-width: 1025px) {
  .table-body .td.failed {
    margin-left: 0;
  }
}

.table-footer {
  margin: 8ex 0;
}
.table-footer nav {
  position: relative;
  width: 100%;
  text-align: center;
  line-height: 4;
}
.table-footer nav * {
  display: inline-block;
}
.table-footer nav .showing {
  color: #b3b3b3;
}
@media (min-width: 1025px) {
  .table-footer nav .showing {
    display: inline-block;
    position: absolute;
    left: 14.75%;
  }
}
.table-footer nav > .primary-btn {
  vertical-align: middle;
}
@media (min-width: 1025px) {
  .table-footer nav > .primary-btn {
    position: absolute;
    right: 1em;
  }
}

.pagination .pager li {
  display: inline-block;
  line-height: 1.2;
}
.pagination .pager li.active a {
  font-weight: 700;
  border-bottom: 3px solid #057ed8;
  color: #000;
}
.pagination a {
  text-decoration: none;
  color: #66696a;
  padding: 0.3333333333ex 0.25em 0.2ex;
  font-size: 16px;
}
.pagination .prev,
.pagination .next {
  width: 8px;
  height: 16px;
  padding: 0 1em;
  border: 0;
  background-color: transparent;
  font-size: 16px;
  color: #057ed8;
}
.pagination .prev:hover, .pagination .prev:active, .pagination .prev.active, .pagination .prev.active:hover, .pagination .prev.active:active,
.pagination .next:hover,
.pagination .next:active,
.pagination .next.active,
.pagination .next.active:hover,
.pagination .next.active:active {
  color: #057ed8;
}
.pagination .prev.disabled, .pagination .prev.disabled:hover, .pagination .prev.disabled:active,
.pagination .next.disabled,
.pagination .next.disabled:hover,
.pagination .next.disabled:active {
  color: #e6e6e6;
}

#page-footer ul {
  padding-left: 2em;
  list-style-type: disc;
}
</style>