const formatDate = (date) => {
    return moment(new Date(date)).format("DD/MM/YYYY");
};

export default formatDate;
